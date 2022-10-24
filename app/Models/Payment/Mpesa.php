<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'first_name',
        'middle_name',
        'last_name',
    ];

    public function mpesages()
    {
        return $this->hasMany(Mpesage::class);
    }
}
