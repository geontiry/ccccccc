<?php

namespace App\Models\Employee;

use App\Enums\Employee\TerminationReason;
use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termination extends Model
{
    use HasFactory;

    protected $fillable = [
        'employment_id',
        'reason',
        'voluntary',
        'request_at',
        'accept_at',
        'reject_at',
        'cleared_at',
        'terminated_at',
        'confirmed_at',
        'approved_at',
        'authorized_at',
    ];

    protected $casts = [
        'reason' => TerminationReason::class,
        'request_at' => 'datetime',
        'cleared_at' => 'datetime',
        'terminated_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'authorized_at' => 'datetime',
    ];

    public function employment()
    {
        return $this->belongsTo(Employment::class);
    }

    public function letter()
    {
        return $this->morphOne(Filing::class, 'fileable');
    }
}
