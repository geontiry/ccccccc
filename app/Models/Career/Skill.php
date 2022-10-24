<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'description',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
