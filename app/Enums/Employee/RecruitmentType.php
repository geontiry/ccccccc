<?php

namespace App\Enums\Employee;

enum RecruitmentType: string
{
    case Direct = 'Direct';
    case Interview = 'Interview';
    case Promotion = 'Promotion';
}
