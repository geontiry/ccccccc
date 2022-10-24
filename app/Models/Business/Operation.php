<?php

namespace App\Models\Business;

use App\Enums\Day;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'mode',
        'day',
        'open_at',
        'close_at',
    ];

    protected $casts = [
        'day'=>Day::class,
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
