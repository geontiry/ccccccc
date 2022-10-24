<?php

namespace Database\Factories\Location;

use App\Models\Location\County;
use App\Models\Location\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountyFactory extends Factory
{
    protected $model = County::class;

    public function definition()
    {
        return [
            // 'user_id' => $faker->unique()->numberBetween(1, App\User::count()),
            'region_id' => Region::inRandomOrder()->first()->id,
            'name' => $this->faker->unique()->state(),
            'status' => $this->faker->boolean(),
        ];
    }
}
