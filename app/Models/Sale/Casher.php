<?php

namespace App\Models\Sale;

use App\Models\Payment\Payment;
use App\Models\User\Guest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casher extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'subtotal',
        'discount',
        'total',
        'status',
        'cashed_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'cashed_at'=>'timestamp',
        'confirmed_at'=>'timestamp',
        'approved_at'=>'timestamp',
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function cashlists()
    {
        return $this->hasMany(Cashlist::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }
}
