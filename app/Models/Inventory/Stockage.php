<?php

namespace App\Models\Inventory;

use App\Models\Asset\Warehouse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockage extends Model
{
    use HasFactory;

    protected $fillable = [
        'warehouse_id',
        'pulled_at',
        'captured_at',
        'posted_at',
        'validated_at',
    ];

    protected $casts = [
        'pulled_at' => 'datetime',
        'captured_at' => 'datetime',
        'posted_at' => 'datetime',
        'validated_at' => 'datetime',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
