<?php

namespace App\Models\Sale;

use App\Models\Catalogue\Package;
use App\Models\Catalogue\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'casher_id',
        'product_id',
        'package_id',
        'receipt_no',
        'quantity',
        'unitprice',
    ];

    public function casher()
    {
        return $this->belongsTo(Casher::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function cashings()
    {
        return $this->hasMany(Cashing::class);
    }
}
