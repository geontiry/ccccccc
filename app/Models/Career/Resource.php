<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'weekhours',
        'leavedays',
    ];

    public function workplans()
    {
        return $this->hasMany(Workplan::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
