<?php

namespace Database\Factories\Catalogue;

use App\Models\Catalogue\Catalogue;
use App\Models\Catalogue\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'catalogue_id'=>Catalogue::pluck('id')->random(),
            'path' => 'https://picsum.photos/id/'. $this->faker->randomNumber(3, false).'/200/300',
        ];
    }
}
