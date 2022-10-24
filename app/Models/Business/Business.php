<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'code',
        'name',
        'domain',
        'brand',
        'description',
        'logo',
        'slogan'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }
}
