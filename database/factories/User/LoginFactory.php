<?php

namespace Database\Factories\User;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id'=> User::inRandomOrder()->first()->id,
            'userip'=> $this->faker->ipv4(),
            'email'=> $this->faker->email(),
            'method'=>'api',
            'browser' => $this->faker->userAgent(),
            'login_at' => now(),
            'logout_at'=> now(),
            'attempt_at' => now(),
        ];
    }
}
