<?php

namespace App\Models\Inventory;

use App\Models\Catalogue\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'tier_id',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function tier()
    {
        return $this->hasMany(Tier::class);
    }
}
