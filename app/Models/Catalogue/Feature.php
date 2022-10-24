<?php

namespace App\Models\Catalogue;

use App\Models\Business\Site;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'name',
        'unit',
        'description',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function variants()
    {
        return $this->belongsTo(Variant::class);
    }
}
