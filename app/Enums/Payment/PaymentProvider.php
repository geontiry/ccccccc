<?php

namespace App\Enums\Payment;

enum PaymentProvider: string
{
    case Handcash = 'Cash';
    case Tillcash = 'M-Pesa Till';
    case Mpesa = 'M-Pesa Express';
}
