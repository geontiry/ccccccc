<?php

namespace safaricom\Mpesa;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class MpesaCallbackService
{
  public static function stkSimulateCallback()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "resultCode" => $data->Body->stkCallback->ResultCode,
      "resultDesc" => $data->Body->stkCallback->ResultDesc,
      "merchantRequestID" => $data->Body->stkCallback->MerchantRequestID,
      "checkoutRequestID" => $data->Body->stkCallback->CheckoutRequestID,
      "amount" => $data->stkCallback->Body->CallbackMetadata->Item[0]->Value,
      "mpesaReceiptNumber" => $data->Body->stkCallback->CallbackMetadata->Item[1]->Value,
      "balance" => $data->stkCallback->Body->CallbackMetadata->Item[2]->Value,
      "b2CUtilityAccountAvailableFunds" => $data->Body->stkCallback->CallbackMetadata->Item[3]->Value,
      "transactionDate" => $data->Body->stkCallback->CallbackMetadata->Item[4]->Value,
      "phoneNumber" => $data->Body->stkCallback->CallbackMetadata->Item[5]->Value
    ];

    return json_encode($result);
  }

  public static function stkQueryCallback()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "resultCode" => $data->ResultCode,
      "responseDescription" => $data->ResponseDescription,
      "responseCode" => $data->ResponseCode,
      "merchantRequestID" => $data->MerchantRequestID,
      "checkoutRequestID" => $data->CheckoutRequestID,
      "resultDesc" => $data->ResultDesc
    ];

    return json_encode($result);
  }
  
  public static function c2bRequestValidation()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "transactionType" => $data->TransactionType,
      "transID" => $data->TransID,
      "transTime" => $data->TransTime,
      "transAmount" => $data->TransAmount,
      "businessShortCode" => $data->BusinessShortCode,
      "billRefNumber" => $data->BillRefNumber,
      "invoiceNumber" => $data->InvoiceNumber,
      "orgAccountBalance" => $data->OrgAccountBalance,
      "thirdPartyTransID" => $data->ThirdPartyTransID,
      "MSISDN" => $data->MSISDN,
      "firstName" => $data->FirstName,
      "middleName" => $data->MiddleName,
      "lastName" => $data->LastName
    ];

    return json_encode($result);
  }

  public function mpesaValidation(Request $request)
  {
    $result_code = "0";
    $result_description = "Accepted validation request.";

    $result = json_encode(["ResultCode" => $result_code, "ResultDesc" => $result_description]);
    $response = new Response();
    $response->headers->set("Content-Type", "application/json; charset=utf-8");
    $response->setContent($result);
    return $response;
  }

  public static function c2bRequestConfirmation()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);    

    $result = [
      "transactionType" => $data->TransactionType,
      "transID" => $data->TransID,
      "transTime" => $data->TransTime,
      "transAmount" => $data->TransAmount,
      "businessShortCode" => $data->BusinessShortCode,
      "billRefNumber" => $data->BillRefNumber,
      "invoiceNumber" => $data->InvoiceNumber,
      "orgAccountBalance" => $data->OrgAccountBalance,
      "thirdPartyTransID" => $data->ThirdPartyTransID,
      "MSISDN" => $data->MSISDN,
      "firstName" => $data->FirstName,
      "middleName" => $data->MiddleName,
      "lastName" => $data->LastName
    ];

    return json_encode($result);
  }

  // public function mpesaConfirmation(Request $request)
  // {
  //   $content = json_decode($request->getContent());
  //   $mpesa_transaction = new MpesaTransaction();
  //   $mpesa_transaction->TransactionType = $content->TransactionType;
  //   $mpesa_transaction->TransID = $content->TransID;
  //   $mpesa_transaction->TransTime = $content->TransTime;
  //   $mpesa_transaction->TransAmount = $content->TransAmount;
  //   $mpesa_transaction->BusinessShortCode = $content->BusinessShortCode;
  //   $mpesa_transaction->BillRefNumber = $content->BillRefNumber;
  //   $mpesa_transaction->InvoiceNumber = $content->InvoiceNumber;
  //   $mpesa_transaction->OrgAccountBalance = $content->OrgAccountBalance;
  //   $mpesa_transaction->ThirdPartyTransID = $content->ThirdPartyTransID;
  //   $mpesa_transaction->MSISDN = $content->MSISDN;
  //   $mpesa_transaction->FirstName = $content->FirstName;
  //   $mpesa_transaction->MiddleName = $content->MiddleName;
  //   $mpesa_transaction->LastName = $content->LastName;
  //   $mpesa_transaction->save();
  //   // Responding to the confirmation request
  //   $response = new Response();
  //   $response->headers->set("Content-Type", "text/xml; charset=utf-8");
  //   $response->setContent(json_encode(["C2BPaymentConfirmationResult" => "Success"]));
  //   return $response;
  // }

  public static function b2cRequestCallback()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);
   
    $result = [
      "resultCode" => $data->Result->ResultCode,
      "resultDesc" => $data->Result->ResultDesc,
      "originatorConversationID" => $data->Result->OriginatorConversationID,
      "conversationID" => $data->Result->ConversationID,
      "transactionID" => $data->Result->TransactionID,
      "initiatorAccountCurrentBalance" => $data->Result->ResultParameters->ResultParameter[0]->Value,
      "debitAccountCurrentBalance" => $data->Result->ResultParameters->ResultParameter[1]->Value,
      "amount" => $data->Result->ResultParameters->ResultParameter[2]->Value,
      "debitPartyAffectedAccountBalance" => $data->Result->ResultParameters->ResultParameter[3]->Value,
      "transCompletedTime" => $data->Result->ResultParameters->ResultParameter[4]->Value,
      "debitPartyCharges" => $data->Result->ResultParameters->ResultParameter[5]->Value,
      "receiverPartyPublicName" => $data->Result->ResultParameters->ResultParameter[6]->Value,
      "currency" => $data->Result->ResultParameters->ResultParameter[7]->Value
    ];
    
    return json_encode($result);
  }

  public static function b2bRequestCallback()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "resultCode" => $data->Result->ResultCode,
      "resultDesc" => $data->Result->ResultDesc,
      "originatorConversationID" => $data->Result->OriginatorConversationID,
      "conversationID" => $data->Result->ConversationID,
      "transactionID" => $data->Result->TransactionID,
      "transactionReceipt" => $data->Result->ResultParameters->ResultParameter[0]->Value,
      "transactionAmount" => $data->Result->ResultParameters->ResultParameter[1]->Value,
      "b2CWorkingAccountAvailableFunds" => $data->Result->ResultParameters->ResultParameter[2]->Value,
      "b2CUtilityAccountAvailableFunds" => $data->Result->ResultParameters->ResultParameter[3]->Value,
      "transactionCompletedDateTime" => $data->Result->ResultParameters->ResultParameter[4]->Value,
      "receiverPartyPublicName" => $data->Result->ResultParameters->ResultParameter[5]->Value,
      "B2CChargesPaidAccountAvailableFunds" => $data->Result->ResultParameters->ResultParameter[6]->Value,
      "B2CRecipientIsRegisteredCustomer" => $data->Result->ResultParameters->ResultParameter[7]->Value
    ];

    return json_encode($result);
  }

  public static function statusRequestCallback()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "resultCode" => $data->Result->ResultCode,
      "resultDesc" => $data->Result->ResultDesc,
      "originatorConversationID" => $data->Result->OriginatorConversationID,
      "conversationID" => $data->Result->ConversationID,
      "transactionID" => $data->Result->TransactionID,
      "ReceiptNo" => $data->Result->ResultParameters->ResultParameter[0]->Value,
      "ConversationID" => $data->Result->ResultParameters->ResultParameter[1]->Value,
      "FinalisedTime" => $data->Result->ResultParameters->ResultParameter[2]->Value,
      "Amount" => $data->Result->ResultParameters->ResultParameter[3]->Value,
      "TransactionStatus" => $data->Result->ResultParameters->ResultParameter[4]->Value,
      "ReasonType" => $data->Result->ResultParameters->ResultParameter[5]->Value,
      "TransactionReason" => $data->Result->ResultParameters->ResultParameter[6]->Value,
      "DebitPartyCharges" => $data->Result->ResultParameters->ResultParameter[7]->Value,
      "DebitAccountType" => $data->Result->ResultParameters->ResultParameter[8]->Value,
      "InitiatedTime" => $data->Result->ResultParameters->ResultParameter[9]->Value,
      "OriginatorConversationID" => $data->Result->ResultParameters->ResultParameter[10]->Value,
      "CreditPartyName" => $data->Result->ResultParameters->ResultParameter[11]->Value,
      "DebitPartyName" => $data->Result->ResultParameters->ResultParameter[12]->Value
    ];

    return json_encode($result);
  }

  public static function balanceRequestCallback()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "resultCode" => $data->Result->ResultCode,
      "resultType" => $data->Result->ResultType,
      "resultDesc" => $data->Result->ResultDesc,
      "originatorConversationID" => $data->Result->OriginatorConversationID,
      "conversationID" => $data->Result->ConversationID,
      "transactionID" => $data->Result->TransactionID,
      "accountBalance" => $data->Result->ResultParameters->ResultParameter[0]->Value,
      "BOCompletedTime" => $data->Result->ResultParameters->ResultParameter[1]->Value,
    ];

    return json_encode($result);
  }

  public static function reversalRequestCallBack()
  {
    $callback = file_get_contents('php://input');
    $data = json_decode($callback);

    $result = [
      "resultType" => $data->Result->ResultType,
      "resultCode" => $data->Result->ResultCode,
      "resultDesc" => $data->Result->ResultDesc,
      "conversationID" => $data->Result->ConversationID,
      "transactionID" => $data->Result->TransactionID,
      "originatorConversationID" => $data->Result->OriginatorConversationID
    ];

    return json_encode($result);
  }

}