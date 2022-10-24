<?php

namespace App\Enums\Payment;

enum PaymentType: string
{
    case Withdwawal = 'Withdwawal';
    case Deposit = 'Deposit';
    case Transfer = 'Transfer';
    case Reverse = 'Reverse';
    case Payin = 'Payin';
    case Payout = 'Payout';
}
