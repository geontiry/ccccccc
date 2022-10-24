<?php

namespace App\Models\Career;

use App\Enums\Career\CareerSkill;
use App\Models\Company\Directorate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'directorate_id',
        'reporting_id',
        'role_id',
        'position',
        'skill',
        'description',
    ];

    protected $casts = [
        'title' => CareerSkill::class,
    ];

    public function directorate()
    {
        return $this->belongsTo(Directorate::class);
    }

    public function reporting()
    {
        return $this->belongsTo(self::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function duties()
    {
        return $this->belongsTo(Duty::class);
    }

    public function skills()
    {
        return $this->belongsTo(Skill::class);
    }

    public function positions()
    {
        return $this->belongsTo(Position::class);
    }

    public function rights()
    {
        return $this->belongsTo(Right::class);
    }
}
