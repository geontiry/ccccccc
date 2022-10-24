<?php

namespace App\Models\Sale;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replace extends Model
{
    use HasFactory;

    protected $fillable = [
        'return_id',
        'ordering_id',
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

    public function ordering()
    {
        return $this->belongsTo(Ordering::class);
    }
}
