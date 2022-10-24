<?php

namespace App\Models\User;

use App\Models\Sale\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullname',
        'phone',
        'alt_phone',
        'enabled',
    ];

    protected $casts = [
        'enabled' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function firm()
    {
        return $this->hasOne(Firm::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
