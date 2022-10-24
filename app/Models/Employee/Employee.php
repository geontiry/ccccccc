<?php

namespace App\Models\Employee;

use App\Enums\MaritalStatus;
use App\Enums\Religion;
use App\Models\Asset\Filing;
use App\Models\Location\Subcounty;
use App\Models\Payment\Paying;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'dob',
        'nationality',
        'national_id',
        'kra_pin',
        'nssf_number',
        'nhif_number',
        'marital_status',
        'religion',
        'tribe',
        'languages',
        'address',
        'code',
        'town',
        'phone',
        'phone2',
        'email',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'subcounty_id',
    ];

    protected $casts = [
        'marital_status' => MaritalStatus::class,
        'religion' => Religion::class,
        'languages' => 'array',
        'dob' => 'date:Y-m-d',
    ];

    public function location()
    {
        return $this->belongsTo(Subcounty::class);
    }

    public function empBankings()
    {
        return $this->belongsTo(EmpBanking::class);
    }

    public function empEducation()
    {
        return $this->belongsTo(EmpEducation::class);
    }

    public function empExperiences()
    {
        return $this->belongsTo(EmpExperience::class);
    }

    public function empKinships()
    {
        return $this->belongsTo(EmpKinship::class);
    }

    public function payings()
    {
        return $this->morphMany(Paying::class, 'payable');
    }

    public function documents()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
