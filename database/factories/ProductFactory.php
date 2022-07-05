<?php

namespace Database\Factories;

use App\Models\Subcategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        $name = $this->faker->sentence(2);
        $subcategory = Subcategories::all()->random();

        $category = $subcategory->category;

        $brand = $category->brands->random();

        if($subcategory->color){
            $quantity = null;
        }else{
            $quantity = 15;
        }

        return [
            'subcategory_id' =>  $subcategory->id,
            'brand_id' => $brand->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99,69.99,99.99]),
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
