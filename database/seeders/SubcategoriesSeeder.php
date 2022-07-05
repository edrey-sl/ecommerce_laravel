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
            'name' => 'Alcatel',
            'slug' => Str::slug('Alcatel'),
     
        ],
        [
            'category_id' => 1,
            'name' => 'Alcatel',
            'slug' => Str::slug('Alcatel'),
   
        ],


        [
            'category_id' => 2,
            'name' => 'Alcatel 2',
            'slug' => Str::slug('Alcatel 2'),
   
        ],
        [
            'category_id' => 2,
            'name' => 'Alcatel 2',
            'slug' => Str::slug('Alcatel 2'),
     
        ],
        [
            'category_id' => 2,
            'name' => 'Alcatel 2',
            'slug' => Str::slug('Alcatel 2'),
   
        ],


        [
            'category_id' => 3,
            'name' => 'Alcatel 3',
            'slug' => Str::slug('Alcatel 3'),
      
        ],
        [
            'category_id' => 3,
            'name' => 'Alcatel 3',
            'slug' => Str::slug('Alcatel 3'),
      
        ],
        [
            'category_id' => 3,
            'name' => 'Alcatel 3',
            'slug' => Str::slug('Alcatel 3'),
    
        ],

        [
            'category_id' => 4,
            'name' => 'Alcatel 4',
            'slug' => Str::slug('Alcatel 4'),
       
        ],
        [
            'category_id' => 4,
            'name' => 'Alcatel 4',
            'slug' => Str::slug('Alcatel 4'),
        
        ],
        [
            'category_id' => 4,
            'name' => 'Alcatel 4',
            'slug' => Str::slug('Alcatel 4'),
     
        ],
        [
            'category_id' => 5,
            'name' => 'Camisa',
            'slug' => Str::slug('Alcatel 5'),
            'color' => true,
            'size' => true
         
        ],
        [
            'category_id' => 5,
            'name' => 'Blusa',
            'slug' => Str::slug('Alcatel 5'),
            'color' => true,
            'size' => true
          
        ],
        [
            'category_id' => 5,
            'name' => 'Alcatel 5',
            'slug' => Str::slug('Alcatel 5'),
       
        ]
        ];

       
        foreach ($subcategories as $subcaregory ) {
            Subcategories::factory(1)->create($subcaregory);
        }
    
    }
}
