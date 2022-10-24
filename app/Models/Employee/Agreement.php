<?php

namespace App\Models\Employee;

use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'employment_id',
        'type',
        'agreement_at',
        'confirmed_at',
        'approved_at',
        'authorized_at',
    ];

    protected $casts = [
        'agreement_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'authorized_at' => 'datetime',
    ];

    public function employment()
    {
        return $this->belongsTo(Employment::class);
    }

    public function contracts()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
