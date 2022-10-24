<?php

namespace App\Models\Shipment;

use App\Enums\Shipment\ShipmentCluster;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipTotal extends Model
{
    use HasFactory;

    protected $fillable = [
        'cluster',
        'margin',
        'fee'
    ];

    protected $casts = [
        'cluster' => ShipmentCluster::class,
    ];

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
