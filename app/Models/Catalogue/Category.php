<?php

namespace App\Models\Catalogue;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory, SoftDeletes; 
    use HasRecursiveRelationships;

    protected $fillable = [
        'site_id',
        'catalogue_id',
        'parent_id',
        'name',
        'slug',
        'description',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class);
    }

    // public function parent()
    // {
    //     return $this->belongsTo(self::class); 
    // }

    // public function children()
    // {
    //     return $this->hasMany(self::class, 'parent_id');
    // }

    // public function isChild(): bool
    // {
    //     return $this->parent_id !== null;
    // }

    // public static function tree()
    // {
    //     $allCategories = Category::get();

    //     $rootCategories = $allCategories->whereNull('parent_id');

    //     self::formatTree($rootCategories, $allCategories);

    //     return $rootCategories;
    // }

    // private static function formatTree($categories, $allCategories)
    // {
    //     foreach ($categories as $category) {
    //         $category->children = $allCategories->where('parent_id', $category->id)->values();

    //         if ($category->children->isNotEmpty()) {
    //             self::formatTree($category->children, $allCategories);
    //         }
    //     }
    // }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
