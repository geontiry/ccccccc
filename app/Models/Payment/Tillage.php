<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tillage extends Model
{
    use HasFactory;

    protected $fillable = [
        'tilling_id',
        'trans_amount',
        'trans_code',
        'trans_cost',
        'till_balance',
        'tilled_at',
    ];

    protected $casts = [
        'tilled_at' => 'datetime',
    ];

    public function tilling()
    {
        return $this->belongsTo(Tilling::class);
    }
}
