<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategories;



class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $subcategories = [
        
        //Celulares y Accesorios
        [
            'category_id' => 1,
            'name' => 'Alcatel',
            'slug' => Str::slug('Alcatel'),
            'color' => true
        ],
        [
            'category_id' => 1,
            'name' => 'Redmi note 10 pro',
            'slug' => Str::slug('Redmi note 10 pro'),
     
        ],
        [
            'category_id' => 1,
            'name' => 'Lenovo pro max',
            'slug' => Str::slug('Lenovo pro max'),
   
        ],


        [
            'category_id' => 2,
            'name' => 'LG smart TV',
            'slug' => Str::slug('LG smart TV'),
   
        ],
        [
            'category_id' => 2,
            'name' => 'Roku smart tv',
            'slug' => Str::slug('Roku smart tv'),
     
        ],
        [
            'category_id' => 2,
            'name' => 'Samsung smart tv',
            'slug' => Str::slug('Samsung smart tv'),
   
        ],


        [
            'category_id' => 3,
            'name' => 'Xbox one',
            'slug' => Str::slug('xbox one'),
      
        ],
        [
            'category_id' => 3,
            'name' => 'Xbox 360',
            'slug' => Str::slug('xbox 360'),
      
        ],
        [
            'category_id' => 3,
            'name' => 'Nintendo',
            'slug' => Str::slug('Nintendo'),
    
        ],

        [
            'category_id' => 4,
            'name' => 'PC gama alta',
            'slug' => Str::slug('PC gama alta'),
       
        ],
        [
            'category_id' => 4,
            'name' => 'PC gama media',
            'slug' => Str::slug('PC gama media'),
        
        ],
        [
            'category_id' => 4,
            'name' => 'PC gama alta',
            'slug' => Str::slug('PC gama alta'),
     
        ],
        [
            'category_id' => 5,
            'name' => 'Camisa',
            'slug' => Str::slug('Camisa'),
            'color' => true,
            'size' => true
         
        ],
        [
            'category_id' => 5,
            'name' => 'Blusa',
            'slug' => Str::slug('Blusa'),
            'color' => true,
            'size' => true
          
        ],
        [
            'category_id' => 5,
            'name' => 'Pantalon vaquero',
            'slug' => Str::slug('Pantalon vaquero'),
       
        ]
        ];

       
        foreach ($subcategories as $subcaregory ) {
            Subcategories::factory(1)->create($subcaregory);
        }
    
    }
}
