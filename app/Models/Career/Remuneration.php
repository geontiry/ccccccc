<?php

namespace App\Models\Career;

use App\Enums\Career\CareerRemuneration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remuneration extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'category',
        'amount',
        'status',
    ];

    protected $casts = [
        'shift' => CareerRemuneration::class,
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
