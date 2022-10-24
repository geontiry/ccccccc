<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpesage extends Model
{
    use HasFactory;

    protected $fillable = [
        'mpesa_id',
        'trans_id',
        'trans_type',
        'business_code',
        'bill_ref_number',
        'invoice_number',
        'third_party_trans_id',
        'MSISDN',
        'trans_amount',
        'account_balance',
        'transacted_at',
    ];

    protected $casts = [
        'transacted_at' => 'datetime',
    ];

    public function mpesa()
    {
        return $this->belongsTo(Mpesa::class);
    }
}
