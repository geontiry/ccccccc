<?php

namespace App\Models\Sale;

use App\Models\Asset\Filing;
use App\Models\Catalogue\Product;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subtotal',
        'discount',
        'total',
        'requested_at',
        'processed_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'requested_at' => 'datetime',
        'processed_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function requests()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }

    public function quotelists()
    {
        return $this->hasMany(Quotelist::class);
    }
}
