<?php

namespace App\Models\Inventory;

use App\Models\Asset\Filing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoicing extends Model
{
    use HasFactory;

    protected $fillable = [
        'procurement_id',
        'invoice_number',
        'delivery_note_number',
        'invoice_at',
        'delivery_note_at',
    ];

    protected $casts = [
        'invoice_at' => 'datetime',
        'delivery_note_at' => 'datetime',
    ];

    public function procurement()
    {
        return $this->belongsTo(Procurement::class);
    }

    public function supplyings()
    {
        return $this->hasMany(Supplying::class);
    }

    public function invoices()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }

    public function deliveryNotes()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
