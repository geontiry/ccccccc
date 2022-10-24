<?php

namespace App\Models\Inventory;

use App\Models\Asset\Filing;
use App\Models\Supplier\Supplier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'supplier_id',
        'po_number',
        'discount',
        'ordered_at',
        'confirmed_at',
        'approved_at',
        'payment_at',
    ];

    protected $casts = [
        'ordered_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'approved_at' => 'datetime',
        'payment_at' => 'datetime',
    ];

    public function purchases()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

    public function invoicings()
    {
        return $this->belongsTo(Invoicing::class);
    }

    public function pos()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
