<?php

namespace App\Models\Sale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retuurn extends Model
{
    use HasFactory;

    protected $fillable = [
        'delivery_id',
        'claim',
        'description',
        'returned_at',
        'accepted_at',
        'confirmed_at',
        'approved_at',
    ];
    protected $casts = [
        'returned_at' => 'datetime',
        'accepted_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function refund()
    {
        return $this->hasOne(Refund::class);
    }

    public function replaces()
    {
        return $this->hasOne(Replace::class);
    }
}
