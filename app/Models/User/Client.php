<?php

namespace App\Models\User;

use App\Models\Asset\Pos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pos_id',
        'registered_at',
        'confimed_at',
        'approved_at',
    ];

    protected $casts = [
        'registered_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pos()
    {
        return $this->belongsTo(Pos::class);
    }
}
