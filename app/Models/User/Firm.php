<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;

    protected $fillable = [
        'billing_id',
        'position',
        'organization',
    ];

    public function billing()
    {
        return $this->belongsTo(Billing::class);
    }
}
