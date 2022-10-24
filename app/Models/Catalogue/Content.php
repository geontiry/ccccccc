<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'item',
        'number',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
