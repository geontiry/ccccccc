<?php

namespace App\Models\Sale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordering_id',
        'shipped_at',
        'stationed_at',
        'delivered_at',
        'checked_at',
        'received_at',
    ];
    protected $casts = [
        'processed_at' => 'datetime',
        'packaged_at' => 'datetime',
    ];

    public function ordering()
    {
        return $this->belongsTo(Ordering::class);
    }

    public function return()
    {
        return $this->hasOne(Retuurn::class);
    }
}
