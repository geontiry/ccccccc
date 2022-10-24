<?php

namespace App\Models\Employee;

use App\Enums\Employee\PortalStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    use HasFactory;

    protected $fillable = [
        'employment_id',
        'user_id',
        'status',
        'generated_at',
        'confirmed_at',
        'approved_at',
        'authorized_at',
    ];

    protected $casts = [
        'status' => PortalStatus::class,
        'generated_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'authorized_at' => 'datetime',
    ];

    public function employment()
    {
        return $this->belongsTo(Employment::class);
    }
}
