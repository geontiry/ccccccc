<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compliment extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'compliment_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function compliment()
    {
        return $this->belongsTo(Product::class);
    }
}
