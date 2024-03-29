<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use App\Models\Category;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = [
        [
            'name' => 'Celulares y tablets',
            'slug' =>  Str::slug('Celulares y Accesorios'),
            'icon' => '<i class="fas fa-tablet-alt"></i>'
        ],
        [
            'name' => 'TV, Audio y video',
            'slug' =>  Str::slug('TV, Audio y video'),
            'icon' => '<i class="fas fa-tv"></i>'
        ],
        [
            'name' => 'Consolas y videojuegos',
            'slug' =>  Str::slug('Consolas y videojuegos'),
            'icon' => '<i class="fas fa-gamepad"></i>'
        ],
        [
            'name' => 'PC gamer',
            'slug' =>  Str::slug('PC gamer'),
            'icon' => '<i class="fas fa-laptop"></i>'
        ],
        [
            'name' => 'Moda',
            'slug' =>  Str::slug('Moda'),
            'icon' => '<i class="fas fa-tshirt"></i>'
        ]
        ];

      foreach ($categories as $category ) {
       $category = Category::factory(1)->create($category)->first();

        $brands = Brand::factory(4)->create();

        foreach ($brands as $brand ) {
           $brand->categories()->attach($category->id); 
        }
      }
    }
}
