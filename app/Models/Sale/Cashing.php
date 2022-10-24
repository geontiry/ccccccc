<?php

namespace App\Models\Sale;

use App\Models\Inventory\Inventory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashing extends Model
{
    use HasFactory;

    protected $fillable = [
        'cashlist_id',
        'inventory_id',
        'quantity',
    ];

    public function cashlist()
    {
        return $this->belongsTo(Cashlist::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
