<?php

namespace App\Enums\Employee;

enum TerminationReason: string
{
    case Layoff = 'Layoff';
    case Dismissal = 'Dismissal';
    case Expiration = 'Expiration';
    case Resignation = 'Resignation';
    case Bareavement = 'Bareavement';
}
