<?php

namespace App\Enums\Employee;

enum Religion: string
{
    case Christian = 'Christian';
    case Muslim = 'Muslim';
    case Hindu = 'Hindu';
    case Other = 'Other';
}
