<?php

namespace App\Services\Payment;

use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class MpesaService
{
  public string $env;
  public string $consumer_key; //App Key. Get it at https://developer.safaricom.co.ke
  public string $consumer_secret; //App Secret Key. Get it at https://developer.safaricom.co.ke
  public int $paybill_number; //The MPesa Paybill number
  public int $till_number; //The Lipa Na MPesa paybill number
  public string $base_url; //Base URL for the API endpoints. This is basically the 'common' part of the API endpoints
  private $access_token; //Set up access token
  public DateTime $timestamp;

  public function __construct(
    public string $pass_key = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919', //The Lipa Na MPesa paybill number SAG Key
    public string $initiator_username = 'testapi113', //Initiator Username
    public string $initiator_password = 'Safaricom007@', //TInitiator password
    private string $callback_baseurl = 'https://91c77dd6.ngrok.io/api/callback', //The Callback common part of the URL eg "https://domain.com/callbacks/"
    private string $test_msisdn = '254708374149', //Test phone Number,
    private $cred, //The signed API credentials

    //MPESA URLS
    public string $url_auth_generate = "/oauth/v1/generate?grant_type=client_credentials",
    public string $url_stk_request = "/mpesa/stkpush/v1/processrequest",
    public string $url_stk_query = "/mpesa/stkpushquery/v1/query",
    public string $url_c2b_register = "/mpesa/c2b/v1/registerurl",
    public string $url_c2b_simulate = "/mpesa/c2b/v1/simulate",
    public string $url_b2c_request = "/mpesa/b2c/v1/paymentrequest",
    public string $url_b2b_request = "/mpesa/b2b/v1/paymentrequest",
    public string $url_qr_generate = "/mpesa/qrcode/v1/generate",
    public string $url_status_query = "/mpesa/transactionstatus/v1/query",
    public string $url_balance_query = "/mpesa/accountbalance/v1/query",
    public string $url_reversal_request = "/mpesa/reversal/v1/request",

    /*Callbacks*/
    public $bbtimeout,
    public $bbresult,
    public $baltimeout,
    public $balresult,
    public $statustimeout,
    public $statusresult,
    public $reversetimeout,
    public $reverseresult,
    public string $bctimeout = 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws', //B2C timeout url,
    public string $bcresult = 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws', //B2C results url,
    public string $cbvalidate = 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws', //C2B  Validation url,
    public string $cbconfirm = 'https://b2d7e6a4.ngrok.io/api/confirm?key=ertyuiowwws', //C2B confirmation url,
    public string $lnmocallback = 'https://b2d7e6a4.ngrok.io/api/validate?key=ertyuiowwws', //Lipa na Mpesa Online callback url,
  ) {
    $this->env = config('services.mpesa.env');
    $this->consumer_key = config('services.mpesa.consumer_key');
    $this->consumer_secret = config('services.mpesa.consumer_secret');
    $this->paybill_number = config('services.mpesa.paybill_number');
    $this->till_number = config('services.mpesa.till_number');
    $this->base_url = $this->env == 'sandbox' ? 'https://sandbox.safaricom.co.ke' : 'https://api.safaricom.co.ke';
    $this->access_token =  $this->authToken();
    $this->timestamp = Carbon::rawParse('now')->format('YmdHms');
  }

  //Set Mpesa Certificate
  public function setCred()
  {
    $pubkey = $this->env == 'sandbox' ? File::get(__DIR__ . '/cert/sandbox.cer') : File::get(__DIR__ . '/cert/production.cer');
    openssl_public_encrypt($this->initiator_password, $output, $pubkey, OPENSSL_PKCS1_PADDING);
    // $this->cred = base64_encode($output);
  }

  /*----Generate time bound access token to call allowed APIs----*/
  public function authToken()
  {
    $credentials = base64_encode($this->consumer_key . ':' . $this->consumer_secret);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->base_url . $this->url_auth_generate);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials, 'Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    $response = json_decode($response);

    if ($info["http_code"] == 200) {
      $access_token = $response->access_token;
      $this->access_token = $access_token;
      return $access_token;
    } else {
      //throw new Exception("Invalid Consumer key or secret");
      return false;
    }
  }

  // Returns cURL response
  private function curlSubmit($url, $data)
  {
    $access_token = isset($this->access_token) ? $this->access_token : $this->authToken();

    if ($access_token != '' || $access_token !== false) {
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      $response = curl_exec($curl);
      curl_close($curl);
      return $response;
    } else {
      return false;
    }
  }

  /*----Generates a dynamic M-PESA QR Code----*/
  public function qrGenerate()
  {
  }

  /*----Generate STK Password----*/
  public function stkPassword()
  {
    $timestamp = date('YmdHis');
    $passwd = base64_encode($this->till_number . $this->pass_key . $timestamp);
    return $passwd;
  }

  //
  public function stkSimulate(int $amount, int $phone, string $ref = "Synvast Payment", string $desc = "Payment Testing")
  {
    if (!is_numeric($amount) || $amount < 1 || !is_numeric($phone)) {
      throw new Exception("Invalid amount and/or phone number. Amount should be 0 or more, phone number should be in the format 254xxxxxxxx");
      return false;
    }
    $data = array(
      'Password' => $this->stkPassword(),
      'BusinessShortCode' => $this->till_number,
      'Timestamp' => date('YmdHis'),
      'TransactionType' => 'CustomerPayBillOnline',
      'Amount' => $amount,
      'PartyA' => $phone,
      'PartyB' => $this->till_number,
      'PhoneNumber' => $phone,
      'CallBackURL' => $this->lnmocallback,
      'AccountReference' => $ref,
      'TransactionDesc' => $desc,
    );

    $response = $this->curlSubmit($this->base_url . $this->url_stk_request,  json_encode($data));
    return isset($response) ? $response : false;

    // $result = json_decode($response);
    // if(isset($result) && isset($result->CheckoutRequestID)){
    // 	$c_id = $result->CheckoutRequestID;
    // 	return $this->lnmo_query($c_id);
    // }else{
    // 	return FALSE;
    // }

  }

  //
  public function stkQuery($checkoutRequestID = null)
  {
    if ($checkoutRequestID == null || $checkoutRequestID == '') {
      //throw new Exception("Checkout Request ID cannot be null");
      return false;
    }

    $data = array(
      'BusinessShortCode' => $this->till_number,
      'Password' => $this->stkPassword(),
      'Timestamp' => date('YmdHis'),
      'CheckoutRequestID' => $checkoutRequestID
    );

    $response = $this->curlSubmit($this->base_url . $this->url_stk_query, json_encode($data));
    return $response;
  }

  //Register URLs for callbacks when money is sent from the MPesa toolkit menu
  public function c2bRegister()
  {
    $request_data = array(
      'ShortCode' => $this->paybill_number,
      'ResponseType' => 'Completed',
      'ConfirmationURL' => $this->cbconfirm,
      'ValidationURL' => $this->cbvalidate
    );

    $response = $this->curlSubmit($this->base_url . $this->url_c2b_register, json_encode($request_data));
    //\Log::info($response);
    return $response;
  }

  //Simulate a C2B Transaction to test your ConfirmURL and ValidationURL in the Client to Business method
  public function c2bSimulate($amount, $msisdn, $ref)
  {
    $data = array(
      'ShortCode' => $this->paybill_number,
      'CommandID' => 'CustomerPayBillOnline',
      'Amount' => $amount,
      'Msisdn' => $msisdn,
      'BillRefNumber' => $ref
    );

    $response = $this->curlSubmit(json_encode($data), $this->base_url . $this->url_c2b_simulate);
    return $response;
  }

  //Send money to the clients Mpesa account.
  public function b2cRequest($amount, $phone, $command_id, $remarks)
  {
    $this->setCred();
    $data = array(
      'InitiatorName' => $this->initiator_username,
      'SecurityCredential' => $this->cred,
      'CommandID' => $command_id,
      'Amount' => $amount,
      'PartyA' => $this->paybill_number,
      'PartyB' => $phone,
      'Remarks' => $remarks,
      'QueueTimeOutURL' => $this->bctimeout,
      'ResultURL' => $this->bcresult,
      'Occasion' => '' //Optional
    );

    $response = $this->curlSubmit($this->base_url . $this->url_b2c_request, json_encode($data));
    return $response;
  }

  //Send money to other business Mpesa paybills.
  public function b2bRequest($amount, $shortcode)
  {
    $data = array(
      'Initiator' => $this->initiator_username,
      'SecurityCredential' => $this->cred,
      'CommandID' => 'BusinessToBusinessTransfer',
      'SenderIdentifierType' => 'Shortcode',
      'RecieverIdentifierType' => 'Shortcode',
      'Amount' => 100,
      'PartyA' => $this->paybill_number,
      'PartyB' => 600000,
      'AccountReference' => 'Bennito',
      'Remarks' => 'This is a test comment or remark',
      'QueueTimeOutURL' => $this->bbtimeout,
      'ResultURL' => $this->bbresult,
    );

    $response = $this->curlSubmit($this->base_url . $this->url_b2b_request, json_encode($data));
    return $response;
  }

  //Check a transaction status
  public function statusRequest($transaction = 'LH7819VXPE')
  {
    $data = array(
      'CommandID' => 'TransactionStatusQuery',
      'PartyA' => $this->paybill_number,
      'IdentifierType' => 4,
      'Remarks' => 'Testing API',
      'Initiator' => $this->initiator_username,
      'SecurityCredential' => $this->cred,
      'QueueTimeOutURL' => $this->statustimeout,
      'ResultURL' => $this->statusresult,
      'TransactionID' => $transaction,
      'Occassion' => 'Test'
    );

    $response = $this->curlSubmit($this->base_url . $this->url_status_query, json_encode($data));
    return $response;
  }

  //Check Paybill balance
  public function balanceRequest()
  {
    $data = array(
      'CommandID' => 'AccountBalance',
      'PartyA' => $this->paybill_number,
      'IdentifierType' => '4',
      'Remarks' => 'Remarks or short description',
      'Initiator' => $this->initiator_username,
      'SecurityCredential' => $this->cred,
      'QueueTimeOutURL' => $this->baltimeout,
      'ResultURL' => $this->balresult
    );

    $response = $this->curlSubmit($this->base_url . $this->url_balance_query, json_encode($data));
    return $response;
  }

  //Reverse a transaction
  public function reversalRequest($receiver, $trx_id, $amount)
  {
    $data = array(
      'CommandID' => 'TransactionReversal',
      'ReceiverParty' => $this->test_msisdn,
      'RecieverIdentifierType' => 1, //1=MSISDN, 2=Till_Number, 4=Shortcode
      'Remarks' => 'Testing',
      'Amount' => $amount,
      'Initiator' => $this->initiator_username,
      'SecurityCredential' => $this->cred,
      'QueueTimeOutURL' => $this->reversetimeout,
      'ResultURL' => $this->reverseresult,
      'TransactionID' => 'LIE81C8EFI'
    );

    $response = $this->curlSubmit($this->base_url . $this->url_reversal_request, json_encode($data));
    return $response;
  }

  /**
   *Use this function to get callback data posted in callback routes
   */
  public function callbackData()
  {
    $data = file_get_contents('php://input');
    return $data;
  }

  /**
   *Use this function to confirm all transactions in callback routes
   */

  public function completeRequest($status = true)
  {
    $result = $status === true ? [
      "ResultDesc" => "Confirmation Service request accepted successfully",
      "ResultCode" => "0"
    ] : [
      "ResultDesc" => "Confirmation Service not accepted",
      "ResultCode" => "1"
    ];

    header('Content-Type: application/json');

    echo json_encode($resultArray);
  }
}
