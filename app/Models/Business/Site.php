<?php

namespace App\Models\Business;

use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Category;
use App\Models\Catalogue\Feature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'code',
        'name',
        'domain',
        'description',
        'enabled',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $max = $model::where('business_id', $model->business_id)->max('code');
            $model->code = is_int($max) ? $max + 1 : 0  ;
        });
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
