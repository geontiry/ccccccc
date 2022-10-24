<?php

namespace App\Enums;

enum Period: string //sku, code, isbn,partno
{
    case Day = 'Day';
    case Days = 'Days';
    case Week = 'Week';
    case Weeks = 'Weeks';
    case Month = 'Month';
    case Months = 'Months';
    case Year = 'Year';
    case Years = 'Years';
}
