<?php

namespace App\Models\Location;

use App\Models\Asset\Facility;
use App\Models\Asset\Warehouse;
use App\Models\Career\Vacancy;
use App\Models\Shipment\ShipZone;
use App\Models\User\Shipping;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcounty_id', 'name', 'address', 'directions', 'status'
    ];

    public function subcounty()
    {
        return $this->belongsTo(Subcounty::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class);
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function postings()
    {
        return $this->hasMany(Posting::class);
    }

    public function shipZones()
    {
        return $this->hasMany(ShipZone::class);
    }

    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }
}
