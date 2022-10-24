<?php

namespace App\Models\Catalogue;

use App\Enums\Product\ProductPack;
use App\Models\Sale\Cart;
use App\Models\Sale\Cashlist;
use App\Models\Sale\Orderlist;
use App\Models\Sale\Quotelist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'value',
        'unit',
        'pack',
        'length',
        'width',
        'height',
        'weight',
        'std',
    ];

    protected $casts = [
        'unit'=> ProductPack::class,
        'pack'=> ProductUnit::class,
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cashlists()
    {
        return $this->hasMany(Cashlist::class);
    }

    public function quotelists()
    {
        return $this->hasMany(Quotelist::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderlists()
    {
        return $this->hasMany(Orderlist::class);
    }
}
