<?php

namespace App\Enums\Career;

enum CareerRemuneration: string
{
    case Basic = 'Basic Salary';
    case Accomodation = 'Accomodation Allowance';
    case Commuter = 'Commuter Allowance';
    case Commision = 'Commision Allowance';
    case Overtime = 'Overtime Allowance';
    case Service = 'Service Allowance';
}
