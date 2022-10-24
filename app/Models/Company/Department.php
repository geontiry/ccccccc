<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'directorate_id',
        'name',
        'route'
     ];

    public function directorate()
    {
        return $this->belongsTo(Directorate::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
