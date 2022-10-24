<?php

namespace App\Models\Asset;

use App\Enums\Asset\FileName;
use App\Enums\Asset\FileTitle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filing extends Model
{
    use HasFactory;

    protected $fillable = [
        'fileable_id',
        'fileable_type',
        'code',
        'name',
        'title',
        'size',
        'extension',
        'uploaded_at',
        'confirmed_at',
        'approved_at',
    ];

    protected $casts = [
        'name'=>FileName::class,
        'title'=>FileTitle::class,
        'uploaded_at'=>'datetime',
        'confirmed_at'=>'datetime',
        'approved_at'=>'datetime',
    ];

    public function fileable()
    {
        return $this->morphTo();
    }
}
