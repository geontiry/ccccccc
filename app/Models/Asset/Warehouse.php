<?php

namespace App\Models\Asset;

use App\Enums\StoreStorage;
use App\Enums\StoreBin;
use App\Enums\StorePartition;
use App\Enums\StoreRack;
use App\Enums\StoreSection;
use App\Models\Inventory\Stockage;
use App\Models\Inventory\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'storage',
        'rack',
        'section',
        'partition',
        'bin'
    ];

    protected $casts = [
        'storage' => StoreStorage::class,
        'rack' => StoreRack::class,
        'section' => StoreSection::class,
        'partition' => StorePartition::class,
        'bin' => StoreBin::class,
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function storages()
    {
        return $this->hasMany(Storage::class);
    }

    public function stockages()
    {
        return $this->hasMany(Stockage::class);
    }
}
