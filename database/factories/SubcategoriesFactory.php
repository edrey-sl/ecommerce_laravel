<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subcategories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategories>
 */
class SubcategoriesFactory extends Factory
{
    protected $model = Subcategories::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // el bueno se queda
            'image' => $this->faker->imageUrl(640, 480) 
        ];
    }
}
