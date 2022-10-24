<?php

namespace App\Models\Career;

use App\Enums\Career\CareerShift;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_id',
        'shift',
        'period',
        'break',
        'status',
    ];

    protected $casts = [
        'shift' => CareerShift::class,
    ];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function postings()
    {
        return $this->hasMany(Posting::class);
    }
}
