<?php

namespace App\Models\Sale;

use App\Models\Catalogue\Package;
use App\Models\Catalogue\Product;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'package_id',
        'quantity',
        'chekout_at',
    ];

    protected $casts = [
        'chekout_at'=>'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
