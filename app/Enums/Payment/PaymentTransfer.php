<?php

namespace App\Enums\Payment;

enum PaymentTransfer: string //cash, mobile, bank, internet
{
    case Cash = 'Cash';
    case Mobile = 'Mobile';
    case Bank = 'Bank';
    case Internet = 'Internet';
}
