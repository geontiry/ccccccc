<?php

namespace App\Http\Controllers\API\v1\Payment;

use App\Http\Controllers\Controller;
use App\Services\Payment\MpesaService;

class MpesaController extends Controller
{

  public function stkSimulate($checkoutRequestID = null, MpesaService $mpesa)
  {
    $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
  }
  public function stkQuery($checkoutRequestID = null)
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $STKPushRequestStatus=$mpesa->STKPushQuery($checkoutRequestID,$businessShortCode,$password,$timestamp);
  }

  //Simulate a C2B Transaction to test your ConfirmURL and ValidationURL in the Client to Business method
  public function c2bSimulate($amount, $msisdn, $ref)
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $b2bTransaction=$mpesa->c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );
  }

  //Send money to the clients Mpesa account.
  public function b2cRequest($amount, $phone, $command_id, $remarks)
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $b2cTransaction=$mpesa->b2c($InitiatorName, $SecurityCredential, $CommandID, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $Occasion);
  }

  //Send money to other business Mpesa paybills.
  public function b2bRequest($amount, $shortcode)
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $b2bTransaction=$mpesa->b2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );
  }

  //Check a transaction status
  public function statusRequest($transaction = 'LH7819VXPE')
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $trasactionStatus=$mpesa->transactionStatus($Initiator, $SecurityCredential, $CommandID, $TransactionID, $PartyA, $IdentifierType, $ResultURL, $QueueTimeOutURL, $Remarks, $Occasion);
  }

  //Check Paybill balance
  public function balanceRequest()
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $balanceInquiry=$mpesa->accountBalance($CommandID, $Initiator, $SecurityCredential, $PartyA, $IdentifierType, $Remarks, $QueueTimeOutURL, $ResultURL);
  }

  //Reverse a transaction
  public function reversalRequest($receiver, $trx_id, $amount)
  {
    //
  }

  public function completeRequest($status)
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $callbackData= $status === true ? $mpesa->finishTransaction(): $mpesa->finishTransaction(false);
  }

  public function callbackData($receiver, $trx_id, $amount)
  {
    $mpesa= new \Safaricom\Mpesa\Mpesa();
    $callbackData=$mpesa->getDataFromCallback();
  }

}