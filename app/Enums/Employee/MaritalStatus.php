<?php

namespace App\Enums\Employee;

enum MaritalStatus: string
{
    case Single = 'Single';
    case Engaged = 'Engaged';
    case Married = 'Married';
    case Widowed = 'Widowed';
    case Divorced = 'Divorced';
    case Separated = 'Separated';
}
