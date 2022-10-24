<?php

namespace App\Models\Asset;

use App\Enums\FacilityCentre;
use App\Enums\FacilityOffice;
use App\Enums\FacilityPhase;
use App\Enums\FacilityStore;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'status',
        'phase',
        'office',
        'centre',
        'store',
    ];

    protected $casts = [
        'phase' => FacilityPhase::class,
        'office' => FacilityOffice::class,
        'centre' => FacilityCentre::class,
        'store' => FacilityStore::class,
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
