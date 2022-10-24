<?php

namespace App\Models\Supplier;

use App\Models\Catalogue\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quoting extends Model
{
    use HasFactory;

    protected $fillable = [
        'quotation_id',
        'product_id',
        'unitprice',
        'shipdays',
        'minorder',
        'maxorder',
    ];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
