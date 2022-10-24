<?php

namespace App\Models\Employee;

use App\Enums\Employee\RecruitmentType;
use App\Models\Career\Interview;
use App\Models\Career\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'employee_id',
        'interview_id',
        'type',
        'term',
        'daysvalid',
        'offerletter',
        'offered_at',
        'accepted_at',
        'rejected_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'type' => RecruitmentType::class,
        'offered_at' => 'datetime',
        'accepted_at' => 'datetime',
        'rejected_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function interview()
    {
        return $this->belongsTo(Interview::class);
    }

    public function employments()
    {
        return $this->hasMany(Employment::class);
    }
}
