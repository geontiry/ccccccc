<?php

namespace App\Enums\Employee;

enum PortalStatus: string
{
    case Pending = 'Pending';
    case Activated = 'Activated';
    case Suspended = 'Suspended';
    case Closed = 'Closed';
}
