<?php

namespace Database\Factories\Catalogue;

use App\Models\Catalogue\Catalogue;
use App\Models\Catalogue\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'catalogue_id'=>Catalogue::pluck('id')->random(),
            'name' => $this->faker->words(7, true),
            'value'=>$this->faker->randomNumber(3, false).$this->faker->word(7, false),
            'description'=>$this->faker->sentence(),
        ];
    }
}
