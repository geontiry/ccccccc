<?php

namespace App\Models\Sale;

use App\Models\Catalogue\Package;
use App\Models\Catalogue\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_id',
        'product_id',
        'package_id',
        'quantity',
        'unitprice',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
