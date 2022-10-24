<?php

namespace App\Models\Location;

use App\Models\Employee\Employee;
use App\Models\Supplier\Supplier;
use App\Models\User\Shipping;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcounty extends Model
{
    use HasFactory;

    protected $fillable = [
        'county_id', 'name', 'status'
    ];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function demograph()
    {
        return $this->hasMany(Demograph::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }
}
