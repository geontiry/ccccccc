<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashage extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'cash_id',
        'trans_amount',
        'cashed_at',
    ];

    protected $casts = [
        'cashed_at' => 'datetime',
    ];

    public function cash()
    {
        return $this->belongsTo(Cash::class);
    }
}
