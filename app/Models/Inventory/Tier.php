<?php

namespace App\Models\Inventory;

use App\Enums\Inventory\Group;
use App\Models\Shipment\ShipQuantity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    protected $fillable = [
        'stack_id',
        'name',
        'group',
        'cycle_count',
        'minimum_stock',
        'reorder_stock',
        'maximum_stock',
        'minimum_order',
        'maximum_order',
    ];

    protected $casts = [
        'group' => Group::class,
    ];

    public function stack()
    {
        return $this->belongsTo(Stack::class);
    }

    public function stocks()
    {
        return $this->belongsTo(Stock::class);
    }

    public function shipQuantities()
    {
        return $this->hasMany(ShipQuantity::class);
    }
}
