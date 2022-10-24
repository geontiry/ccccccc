<?php

namespace App\Models\Shipment;

use App\Enums\Shipment\ShipmentDelivery;
use App\Enums\Shipment\ShipmentOption;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'option',
        'delivery',
        'fee'
    ];

    protected $casts = [
        'option' => ShipmentOption::class,
        'delivery' => ShipmentDelivery::class,
    ];

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
