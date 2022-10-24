<?php

namespace App\Models\Employee;

use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'date_from',
        'date_to',
        'position',
        'employer',
        'address',
        'achievements',
        'confirmed_at',
    ];

    protected $casts = [
        'date_from' => 'date:Y-m-d',
        'date_to' => 'date:Y-m-d',
        'confirmed_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function recommendations()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
