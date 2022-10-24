<?php

namespace App\Enums\Career;

enum CareerContract: string
{
    case Permanent = 'Permanent';
    case FixedTerm = 'Fixed-term';
    case RenewTerm = 'Renewable-term';
    case Casual = 'Casual';
}
