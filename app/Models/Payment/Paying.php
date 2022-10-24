<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paying extends Model
{
    use HasFactory;

    protected $fillable = [
        'method_id',
        'payable_id',
        'payable_type',
        'methodable_id',
        'methodable_type',
        'status',
        'saved_at',
        'transaction_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'status' => 'boolean',
        'saved_at' => 'datetime',
        'enabled_at' => 'datetime',
        'transaction_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function method()
    {
        return $this->belongsTo(Method::class);
    }

    public function payable()
    {
        return $this->morphTo();
    }

    public function methodable()
    {
        return $this->morphTo();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
