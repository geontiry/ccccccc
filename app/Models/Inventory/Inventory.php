<?php

namespace App\Models\Inventory;

use App\Enums\Inventory\StockIdentifier;
use App\Models\Sale\Cashing;
use App\Models\Sale\Ordering;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplying_id',
        'storage_id',
        'identity',
        'identity_number',
        'remarks',
    ];

    protected $casts = [
        'identity' => StockIdentifier::class,
    ];

    public function supplying()
    {
        return $this->belongsTo(Supplying::class);
    }

    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }

    public function stockings()
    {
        return $this->hasMany(Stocking::class);
    }

    public function cashings()
    {
        return $this->hasMany(Cashing::class);
    }

    public function orderings()
    {
        return $this->hasMany(Ordering::class);
    }
}
