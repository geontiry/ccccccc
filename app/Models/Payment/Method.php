<?php

namespace App\Models\Payment;

use App\Enums\Payment\PaymentProvider;
use App\Enums\Payment\PaymentTransfer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;

    protected $fillable = [
        'transfer',
        'provider',
        'name',
    ];

    protected $casts = [
        'transfer'=>PaymentTransfer::class,
        'provider'=>PaymentProvider::class,
    ];

    public function payings()
    {
        return $this->hasMany(Paying::class);
    }
}
