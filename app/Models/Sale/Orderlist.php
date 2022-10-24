<?php

namespace App\Models\Sale;

use App\Models\Catalogue\Package;
use App\Models\Catalogue\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'package_id',
        'quantity',
        'unitprice',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function ordering()
    {
        return $this->hasOne(Ordering::class);
    }
}
