<?php

namespace App\Models\Employee;

use App\Models\Asset\Filing;
use App\Models\Payment\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $fillable = [
        'recruitment_id',
        'staff_no',
        'employed_at',
        'confirmed_at',
        'approved_at',
        'authorized_at',
    ];

    protected $casts = [
        'employed_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'authorized_at' => 'datetime',
    ];

    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }

    public function staffIDs()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }

    public function agreements()
    {
        return $this->hasMany(Agreement::class);
    }

    public function portal()
    {
        return $this->hasOne(Portal::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }

    public function postings()
    {
        return $this->hasMany(Posting::class);
    }

    public function termination()
    {
        return $this->hasOne(Termination::class);
    }
}
