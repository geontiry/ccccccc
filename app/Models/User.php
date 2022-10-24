<?php

namespace App\Models;

use App\Models\Career\Application;
use App\Models\Payment\Paying;
use App\Models\Sale\Cart;
use App\Models\Sale\Compare;
use App\Models\Sale\Favorite;
use App\Models\Sale\Order;
use App\Models\Sale\Quote;
use App\Models\User\Login;
use App\Models\User\Password;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use SoftDeletes;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'google_id',
        'facebook_id',
        'twitter_id',
        'linkedin_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'google_id',
        'facebook_id',
        'twitter_id',
        'linkedin_id'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function loginhistories()
    {
        return $this->hasMany(Login::class);
    }

    public function paswordhistories()
    {
        return $this->hasMany(Password::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function payings()
    {
        return $this->morphMany(Paying::class, 'payable');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function billings()
    {
        return $this->hasMany(Billing::class);
    }

    public function compares()
    {
        return $this->hasMany(Compare::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // public function subscriptions()
    // {
    //     return $this->hasMany(Subscription::class);
    // }

    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }

    // public function testimonials()
    // {
    //     return $this->hasMany(Testimonial::class);
    // }
}
