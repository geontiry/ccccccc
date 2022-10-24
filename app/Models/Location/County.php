<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id', 'name', 'status'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function subcounties()
    {
        return $this->hasMany(Subcounty::class);
    }
}
