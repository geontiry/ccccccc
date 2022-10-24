<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocklist extends Model
{
    use HasFactory;

    protected $fillable = [
        'stockage_id',
        'storage_id',
        'pull_count',
        'capture_count',
        'post_count',
        'stock_count',
        'variance',
        'stock_count',
    ];

    public function stockage()
    {
        return $this->belongsTo(Stockage::class);
    }
    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }
}
