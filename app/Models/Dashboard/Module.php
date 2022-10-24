<?php

namespace App\Models\Dashboard;

use App\Models\Career\Right;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'dashboard_id',
        'name',
        'title',
        'route',
        'enabled',
    ];

    public function dashboard()
    {
        return $this->belongsTo(Dashboard::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function rights()
    {
        return $this->morphMany(Right::class, 'rightable');
    }
}
