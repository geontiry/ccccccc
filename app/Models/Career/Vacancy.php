<?php

namespace App\Models\Career;

use App\Enums\Career\EducationLevel;
use App\Models\Asset\Filing;
use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'location_id',
        'age',
        'gender',
        'education',
        'speciality',
        'experience',
        'description',
        'posted_at',
        'closed_at',
    ];

    protected $casts = [
        'education' => EducationLevel::class,
        'posted_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function notices()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
