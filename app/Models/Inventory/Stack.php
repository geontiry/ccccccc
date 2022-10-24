<?php

namespace App\Models\Inventory;

use App\Enums\Inventory\Valuation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'valuation',
    ];

    protected $casts = [
        'valuation' => Valuation::class,
    ];

    public function tiers()
    {
        return $this->hasMany(Tier::class);
    }
}
