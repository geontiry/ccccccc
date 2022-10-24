<?php

namespace App\Enums\Shipment;

enum ShipmentOption: string
{
    case Standard = 'Standard';
    case Premium = 'Premium';
    case Express = 'Express';
}
