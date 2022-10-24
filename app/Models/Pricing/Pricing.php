<?php

namespace App\Models\Pricing;

use App\Models\Catalogue\Product;
use App\Models\Inventory\Supply;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'supply_id',
        'marked_price',
        'purchase_index',
        'unit_price',
        'priced_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'priced_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supply()
    {
        return $this->belongsTo(Supply::class);
    }
}
