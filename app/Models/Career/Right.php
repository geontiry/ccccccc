<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_id',
        'rightable_id',
        'rightable_type',
    ];

    public function rightable()
    {
        return $this->morphTo();
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
