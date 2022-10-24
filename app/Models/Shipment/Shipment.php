<?php

namespace App\Models\Shipment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ship_rate_id',
        'ship_zone_id',
        'ship_quantity_id',
        'ship_total_id',
        'shipfee',
        'generated_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'generated_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function shipRate()
    {
        return $this->belongsTo(ShipRate::class);
    }

    public function shipZone()
    {
        return $this->belongsTo(ShipZone::class);
    }

    public function shipQuantity()
    {
        return $this->belongsTo(ShipQuantity::class);
    }

    public function shipTotal()
    {
        return $this->belongsTo(shipTotal::class);
    }
}
