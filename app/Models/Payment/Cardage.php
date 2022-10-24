<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardage extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'trans_amount',
        'transacted_at',
    ];

    protected $casts = [
        'transacted_at' => 'datetime',
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
