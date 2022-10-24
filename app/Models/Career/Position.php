<?php

namespace App\Models\Career;

use App\Enums\Career\CareerBase;
use App\Enums\Career\CareerContract;
use App\Enums\Career\CareerHours;
use App\Enums\Career\CareerPeriod;
use App\Enums\Career\CareerTime;
use App\Models\Employee\Recruitment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'resource_id',
        'time',
        'base',
        'contract',
        'period',
        'hours',
    ];

    protected $casts = [
        'time' => CareerTime::class,
        'base' => CareerBase::class,
        'contract' => CareerContract::class,
        'period' => CareerPeriod::class,
        'hours' => CareerHours::class,
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function remunerations()
    {
        return $this->hasMany(Remuneration::class);
    }

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function recruitments()
    {
        return $this->hasMany(Recruitment::class);
    }
}
