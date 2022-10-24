<?php

namespace App\Models\Inventory;

use App\Enums\Inventory\StockMovement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocking extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'movement',
        'instock',
        'remark',
        'movement_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'identity' => StockMovement::class,
        'movement_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
