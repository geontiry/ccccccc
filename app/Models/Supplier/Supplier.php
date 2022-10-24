<?php

namespace App\Models\Supplier;

use App\Enums\Supplier\Supplage;
use App\Models\Inventory\Procurement;
use App\Models\Location\Subcounty;
use App\Models\Payment\Paying;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcounty_id',
        'name',
        'incharge',
        'address',
        'website',
        'email',
        'phone',
        'costing',
        'supplage',
        'leadtime',
        'verified_at',
        'assessed_at',
        'assured_at'
    ];

    protected $casts = [
        'supplage' => Supplage::class,
        'verified_at' => 'datetime',
        'assessed_at' => 'datetime',
        'assured_at' => 'datetime',
    ];

    public function subcounty()
    {
        return $this->belongsTo(Subcounty::class);
    }

    public function payings()
    {
        return $this->morphMany(Paying::class, 'payable');
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    public function procurements()
    {
        return $this->hasMany(Procurement::class);
    }
}
