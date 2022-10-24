<?php

namespace App\Models\Dashboard;

use App\Models\Career\Right;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'name',
        'title',
        'route',
        'enabled',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function rights()
    {
        return $this->morphMany(Right::class, 'rightable');
    }
}
