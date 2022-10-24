<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demograph extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcounty_id',
        'population',
    ];

    public function subcounty()
    {
        return $this->belongsTo(Subcounty::class);
    }
}
