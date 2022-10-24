<?php

namespace App\Models\Sale;

use App\Models\Asset\Filing;
use App\Models\Asset\Pos;
use App\Models\Payment\Payment;
use App\Models\User\Billing;
use App\Models\User\Shipping;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pos_id',
        'billing_id',
        'shipping_id',
        'subtotal',
        'savings',
        'discount',
        'shipfee',
        'total',
        'placed_at',
        'registered_at',
        'confirmed_at',
        'approved_at',
        'completed_at',
    ];

    protected $casts = [
        'placed_at' => 'datetime',
        'registered_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pos()
    {
        return $this->belongsTo(Pos::class);
    }

    public function billing()
    {
        return $this->belongsTo(Billing::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }

    public function invoices()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }

    public function orderlists()
    {
        return $this->hasMany(Orderlist::class);
    }
}
