<?php

namespace App\Models\Inventory;

use App\Models\Pricing\Pricing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = [
        'procurement_id',
        'quantity',
        'purchase_price',
    ];

    public function procurement()
    {
        return $this->belongsTo(Procurement::class);
    }

    public function pricings()
    {
        return $this->belongsTo(Pricing::class);
    }
}
