<?php

namespace App\Models\Sale;

use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = [
        'return_id',
        'remark',
        'requested_at',
        'confirmed_at',
        'approved_at',
        'refunded_at',
    ];
    protected $casts = [
        'requested_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'refunded_at' => 'datetime',
    ];

    public function retuurn()
    {
        return $this->belongsTo(Retuurn::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }
}
