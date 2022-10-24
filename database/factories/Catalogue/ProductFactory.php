<?php

namespace Database\Factories\Catalogue;

use App\Models\Catalogue\Brand;
use App\Models\Catalogue\Catalogue;
use App\Models\Catalogue\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'catalogue_id'=>Catalogue::pluck('id')->random(),
            'brand_id'=>Brand::pluck('id')->random(),
            'title' => $this->faker->words(7, true),
            'slug'=>$this->faker->slug(7, false),
        ];
    }
}
