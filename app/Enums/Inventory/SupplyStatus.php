<?php

namespace App\Enums\Inventory;

enum SupplyStatus: string
{
    case Delivered = 'Delivered';
    case Received = 'Received';
    case Returned = 'Returned';
    case Cancelled = 'Cancelled';
}
