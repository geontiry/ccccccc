<?php

namespace App\Models\Career;

use App\Models\Asset\Filing;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vacancy_id',
        'summary',
        'resume',
        'applied_at',
    ];

    protected $casts = [
        'applied_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }

    public function interviews()
    {
        return $this->belongsTo(Interview::class);
    }

    public function letters()
    {
        return $this->morphMany(Filing::class, 'fileable');
    }
}
