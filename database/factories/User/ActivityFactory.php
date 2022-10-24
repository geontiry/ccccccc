<?php

namespace Database\Factories\User;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User\Activity>
 */
class ActivityFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'activity' => $this->faker->word(),
            'activity_at' => now(),
            'title' => $this->faker->words(3, true),
        ];
    }
}
