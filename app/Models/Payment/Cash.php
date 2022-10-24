<?php

namespace App\Models\Payment;

use App\Models\Asset\Pos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'pos_id',
    ];

    public function pos()
    {
        return $this->belongsTo(Pos::class);
    }
}
