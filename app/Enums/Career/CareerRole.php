<?php

namespace App\Enums\Career;

enum CareerRole: string
{
    case Director = 'Director';//CRUD
    case Manager = 'Manager';//RUD
    case Controller = 'Controller';//RU
    case Clerk = 'Clerk';//CR
    case Trainee = 'Trainee';//R
    case Support = 'Support';//X
}
