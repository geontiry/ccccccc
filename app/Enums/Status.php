<?php

namespace App\Enums;

enum Status: string
{
    case Pending = 'Pending';
    case Completed = 'Completed';
    case Placed = 'Placed';
    case Requested = 'Requested';
    case Confirmed = 'Confirmed';
    case Processed = 'Processed';
    case Approved = 'Approved';
    case Ordered = 'Ordered';
    case Shipped = 'Shipped';
    case Delivered = 'Delivered';
    case Received = 'Received';
    case Returned = 'Returned';
    case Cancelled = 'Cancelled';
    case Refunded = 'Refunded';
    case Replaced = 'Replaced';
    case Reviewed = 'Reviewed';
}
