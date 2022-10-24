<?php

namespace App\Models\Supplier;

use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'requested_at',
        'received_at',
        'expire_at',
    ];

    protected $casts = [
        'requested_at' => 'datetime',
        'received_at' => 'datetime',
        'expire_at' => 'datetime',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function quotings()
    {
        return $this->belongsTo(Quoting::class);
    }

    public function quotations()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
