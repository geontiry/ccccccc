<?php

namespace Database\Factories;

use App\Models\User\Billing;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillingFactory extends Factory
{
    protected $model = Billing::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->firstName(),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->firstName(),
            'organization' => $this->faker->firstName(),
            'phone1' => $this->faker->firstName(),
            'phone2' => $this->faker->firstName(),
            'address' => $this->faker->firstName(),
            'code' => $this->faker->firstName(),
            'town' => $this->faker->firstName(),
            'direction' => $this->faker->firstName(),
            'info' => $this->faker->firstName(),
        ];
    }
}
