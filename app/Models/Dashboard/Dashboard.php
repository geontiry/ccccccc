<?php

namespace App\Models\Dashboard;

use App\Models\Career\Right;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'route',
        'enabled',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function rights()
    {
        return $this->morphMany(Right::class, 'rightable');
    }
}
