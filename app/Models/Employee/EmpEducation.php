<?php

namespace App\Models\Employee;

use App\Enums\EducationAward;
use App\Enums\EducationLevel;
use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'date_from',
        'date_to',
        'level',
        'institution',
        'address',
        'speciality',
        'award',
        'result',
        'confirmed_at',
    ];

    protected $casts = [
        'level' => EducationLevel::class,
        'award' => EducationAward::class,
        'date_from' => 'date:Y-m-d',
        'date_to' => 'date:Y-m-d',
        'confirmed_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function awards()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
