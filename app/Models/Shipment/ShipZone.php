<?php

namespace App\Models\Shipment;

use App\Enums\Shipment\ShipmentProx;
use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipZone extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'prox',
        'fee'
    ];

    protected $casts = [
        'prox' => ShipmentProx::class,
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
