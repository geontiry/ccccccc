<?php

namespace App\Models\Career;

use App\Models\Asset\Filing;
use App\Models\Employee\Recruitment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'quote_salary',
        'result',
        'status',
        'interview_at',
    ];

    protected $casts = [
        'interview_at' => 'datetime',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function recuitments()
    {
        return $this->belongsTo(Recruitment::class);
    }

    public function result()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
