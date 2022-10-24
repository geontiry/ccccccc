<?php

namespace App\Models\Payment;

use App\Enums\Payment\PaymentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'paying_id',
        'amount',
        'type',
        'transacted_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'type' => PaymentType::class,
        'status' => 'boolean',
        'transacted_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function paying()
    {
        return $this->belongsTo(Paying::class);
    }
}
