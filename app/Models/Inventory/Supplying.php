<?php

namespace App\Models\Inventory;

use App\Enums\Inventory\SupplyStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplying extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoicing_id',
        'supply_id',
        'quantity',
        'state',
        'state_at',
        'remarks',
    ];

    protected $casts = [
        'state' => SupplyStatus::class,
        'state_at' => 'datetime',
    ];

    public function invoicing()
    {
        return $this->belongsTo(Invoicing::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
