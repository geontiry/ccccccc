<?php

namespace App\Models\Catalogue;

use App\Enums\Period;
use App\Enums\Product\ModelType;
use App\Models\Asset\Filing;
use App\Models\Inventory\Purchasing;
use App\Models\Inventory\Storage;
use App\Models\Pricing\Pricing;
use App\Models\Sale\Cart;
use App\Models\Sale\Cashlist;
use App\Models\Sale\Compare;
use App\Models\Sale\Favorite;
use App\Models\Sale\Orderlist;
use App\Models\Sale\Quotelist;
use App\Models\Supplier\Quoting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'catalogue_id',
        'brand_id',
        'code',
        'title',
        'slug',
        'model_type',
        'model_number',
        'warranty',
        'warranty_period',
        'status',
        'catalogued_at',
        'confirmed_at',
        'approved_at'
    ];

    protected $casts = [
        'model_type' => ModelType::class,
        'warranty_period' => Period::class,
        'catalogued_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($model) {
    //         $model_product = $model::where('catalogue_id', $model->catalogue_id)->count('catalogue_id')+100;
    //         $model_catalogue = Catalogue::find($model->catalogue_id)->code;
    //         $model_listing = Catalogue::find($model->catalogue_id)->listing->code;
    //         $model_category = Catalogue::find($model->catalogue_id)->listing->category->code;
    //         $model_division = Catalogue::find($model->catalogue_id)->listing->category->division->code;
    //         $model_site = Catalogue::find($model->catalogue_id)->listing->category->division->site->code;
    //         $model_business = Catalogue::find($model->catalogue_id)->listing->category->division->site->business->id;

    //         $model->code = (int)(
    //             $model_business . $model_site . $model_division . $model_category . $model_listing . $model_catalogue . $model_product
    //         );
    //     });
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->morphMany(Filing::class, 'imageable');
    }

    public function warranty()
    {
        return $this->morphOne(Filing::class, 'fileable');
    }

    public function datasheet()
    {
        return $this->morphOne(Image::class, 'fileable');
    }

    public function specs()
    {
        return $this->belongsTo(Spec::class);
    }

    public function packages()
    {
        return $this->belongsTo(Package::class);
    }

    public function contents()
    {
        return $this->belongsTo(Content::class);
    }

    public function compliments()
    {
        return $this->belongsTo(Compliment::class);
    }

    public function storages()
    {
        return $this->belongsTo(Storage::class);
    }

    public function quotings()
    {
        return $this->belongsTo(Quoting::class);
    }

    public function purchasings()
    {
        return $this->belongsTo(Purchasing::class);
    }

    public function pricings()
    {
        return $this->hasMany(Pricing::class);
    }

    public function cashlists()
    {
        return $this->hasMany(Cashlist::class);
    }

    public function compares()
    {
        return $this->hasMany(Compare::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function quotelists()
    {
        return $this->hasMany(Quotelist::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderlists()
    {
        return $this->hasMany(Orderlist::class);
    }
}
