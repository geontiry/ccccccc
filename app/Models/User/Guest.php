<?php

namespace App\Models\User;

use App\Models\Asset\Pos;
use App\Models\Sale\Casher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'pos_id',
        'name',
        'phone',
    ];

    public function pos()
    {
        return $this->belongsTo(Pos::class);
    }

    public function cashers()
    {
        return $this->hasMany(Casher::class);
    }
}
