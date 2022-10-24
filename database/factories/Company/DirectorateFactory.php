<?php

namespace Database\Factories\Company;

use App\Models\Company\Directorate;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Directorate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => Company::inRandomOrder()->first()->id,
            'name' => $this->faker->company(),
            'code' => $this->faker->company(),
        ];
    }
}
