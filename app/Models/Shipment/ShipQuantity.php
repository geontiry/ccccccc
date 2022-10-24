<?php

namespace App\Models\Shipment;

use App\Models\Inventory\Tier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipQuantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'tier_id',
        'fee'
    ];

    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
