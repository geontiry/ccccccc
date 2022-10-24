<?php

namespace App\Models\Payment;

use App\Models\Asset\Pos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tilling extends Model
{
    use HasFactory;

    protected $fillable = [
        'pos_id',
        'mpesa_till',
        'phone',
    ];

    public function pos()
    {
        return $this->belongsTo(Pos::class);
    }

    public function tillages()
    {
        return $this->hasMany(Tillage::class);
    }
}
