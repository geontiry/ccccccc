<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'route'
     ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
