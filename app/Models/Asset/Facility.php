<?php

namespace App\Models\Asset;

use App\Models\Company\Company;
use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'location_id',
        'status',
        'lauched_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'lauched_at' => 'timestamp',
        'confirmed_at' => 'timestamp',
        'approved_at' => 'timestamp',
    ];

    public function launched(): bool
    {
        return $this->lauched_at !== null;
    }

    public function confirmed(): bool
    {
        return $this->confirmed_at !== null;
    }

    public function approved(): bool
    {
        return $this->approved_at !== null;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function phases()
    {
        return $this->hasMany(Phase::class);
    }
}
