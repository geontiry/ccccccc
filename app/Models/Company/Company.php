<?php

namespace App\Models\Company;

use App\Models\Asset\Facility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'description',
       'logo',
       'slogan'
    ];

    public function directorates()
    {
        return $this->hasMany(Directorate::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }
}
