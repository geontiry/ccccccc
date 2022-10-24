<?php

namespace App\Models\Asset;

use App\Models\Payment\Cash;
use App\Models\Payment\Tilling;
use App\Models\Sale\Order;
use App\Models\User\Client;
use App\Models\User\Guest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'terminal',
        'status',
        'lauched_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'lauched_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function cashes()
    {
        return $this->hasMany(Cash::class);
    }

    public function tillings()
    {
        return $this->hasMany(Tilling::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
