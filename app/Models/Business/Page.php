<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'url',
        'title',
        'descriprion',
        'keywords'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
