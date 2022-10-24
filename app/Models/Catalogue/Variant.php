<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_id',
        'value',
    ];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    public function specs()
    {
        return $this->belongsTo(Spec::class);
    }
}
