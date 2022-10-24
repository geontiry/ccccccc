<?php

namespace App\Models\Employee;

use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpBanking extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'bank_name',
        'bank_account_no',
        'bank_account_type',
        'bank_card_name',
        'bank_card_no',
        'bank_card_expiry',
        'bank_card_ccv',
        'status',
        'confirmed_at',
    ];

    protected $casts = [
        'bank_card_expiry' => 'date:m-Y',
        'confirmed_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function cards()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
