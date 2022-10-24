<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'address',
        'phone',
        'email',
        'facebook',
        'linkedin',
        'instagram',
        'youtube'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
