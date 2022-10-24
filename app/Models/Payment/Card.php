<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_holder',
        'card_number',
        'card_expiry',
        'card_ccv',
    ];

    public function cardages()
    {
        return $this->hasMany(Cardage::class);
    }
}
