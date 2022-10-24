<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpKinship extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'full_name',
        'occupation',
        'institution',
        'address',
        'phone',
        'email',
        'confirmed_at'
    ];

    protected $casts = [
        'confirmed_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
