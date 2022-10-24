<?php

namespace App\Enums\Shipment;

enum ShipmentDelivery: string
{
    case Pickup = 'Pickup';
    case Home = 'Home';
}
