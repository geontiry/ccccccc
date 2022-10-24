<?php

namespace App\Models\Career;

use App\Enums\Career\CareerBenefit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'name',
        'details',
    ];

    protected $casts = [
        'name' => CareerBenefit::class,
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
