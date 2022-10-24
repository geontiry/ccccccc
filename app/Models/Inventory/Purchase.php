<?php

namespace App\Models\Inventory;

use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'pr_number',
        'request_at',
        'confirmed_at',
        'approved_at',
        'remarks',
    ];

    protected $casts = [
        'request_at'=>'datetime',
        'confirmed_at'=>'datetime',
        'approved_at'=>'datetime',
    ];

    public function purchasings()
    {
        return $this->belongsTo(Purchasing::class);
    }

    public function procurements()
    {
        return $this->belongsTo(Procurement::class);
    }

    public function prs()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
