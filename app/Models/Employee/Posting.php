<?php

namespace App\Models\Employee;

use App\Models\Asset\Filing;
use App\Models\Career\Workplan;
use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $fillable = [
        'employment_id',
        'location_id',
        'workplan_id',
        'posted_at',
        'confirmed_at',
        'approved_at',
        'authorized_at',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'authorized_at' => 'datetime',
    ];

    public function employment()
    {
        return $this->belongsTo(Employment::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function workplan()
    {
        return $this->belongsTo(Workplan::class);
    }

    public function letters()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
