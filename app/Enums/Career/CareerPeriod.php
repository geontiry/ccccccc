<?php

namespace App\Enums\Career;

enum CareerPeriod: string
{
    case Daily = 'Daily';
    case Weekly = 'Weekly';
    case Monthly = 'Monthly';
    case Quartely = 'Quartely';
    case Yearly = 'Yearly';
    case Biannaully = 'Biannaully';
    case Biennually = 'Biennually';
}
