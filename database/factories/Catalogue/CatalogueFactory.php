<?php

namespace Database\Factories\Catalogue;

use App\Models\Catalogue\Catalogue;
use App\Models\Catalogue\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatalogueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Catalogue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'listing_id'=>Listing::pluck('id')->random(),
            'name' => $this->faker->words(7, true),
            'slug'=>$this->faker->slug(7, false),
            'description'=>$this->faker->sentences(2, true),
        ];
    }
}
