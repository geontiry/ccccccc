<?php

namespace App\Models\Sale;

use App\Models\Inventory\Inventory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordering extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderlist_id',
        'inventory_id',
        'processed_at',
        'packaged_at',
    ];
    protected $casts = [
        'processed_at'=>'datetime',
        'packaged_at'=>'datetime',
    ];

    public function orderlist()
    {
        return $this->belongsTo(Orderlist::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }

    public function replace()
    {
        return $this->hasOne(Replace::class);
    }
}
