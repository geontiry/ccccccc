<?php

namespace App\Models\Career;

use App\Enums\Career\CareerRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'create',
        'read',
        'update',
        'delete',
    ];

    protected $casts = [
        'title' => CareerRole::class,
    ];

    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
