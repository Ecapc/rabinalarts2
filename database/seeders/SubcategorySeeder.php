<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories =[

            /*Celulares y tablets*/
            #'Celulares y Smartphones'
            [
                'category_id' => 1,
                'name' => 'Celulares y Smartphones',
                'slug'=> Str::slug('Celulares y Smartphones'),
                'color' => true,
            ],

            #'Smartphone'
            [
                'category_id' => 1,
                'name' => 'SmartPhones',
                'slug'=> Str::slug('SmartPhones'),
            ],

            #'SmartWatch'
            [
                'category_id' => 1,
                'name' => 'SmartWatch',
                'slug'=> Str::slug('SmartWatch'),
            ],    

            /*Ceramica*/
            #'Reloj de Pared'
            [
                'category_id' => 2,
                'name' => 'Reloj de Pared',
                'slug'=> Str::slug('Reloj de Pared'),
                'color' => true,
            ],

            #'Portalapiz'
            [
                'category_id' => 2,
                'name' => 'Portalapiz',
                'slug'=> Str::slug('Portalapiz'),
            ],

            #'Lampara'
            [
                'category_id' => 2,
                'name' => 'Lampara',
                'slug'=> Str::slug('Lampara'),
            ],

            /*Calzado*/
            #'Hombre'
            [
                'category_id' => 3,
                'name' => 'Hombre',
                'slug'=> Str::slug('Hombre'),
                'color' => true,
            ],

            #'Mujer'
            [
                'category_id' => 3,
                'name' => 'Mujer',
                'slug'=> Str::slug('Mujer'),
                'color' => true,
                'size' => true,
            ],

            #'Niño'
            [
                'category_id' => 3,
                'name' => 'Niño',
                'slug'=> Str::slug('Niño'),
                'color' => true,
                'size' => true,
            ],

            /*Computacion*/
            #'Laptop'
            [
                'category_id' => 4,
                'name' => 'Laptop',
                'slug'=> Str::slug('Laptop'),
                'color' => true,
                'size' => true,
            ],

            #'PC'
            [
                'category_id' => 4,
                'name' => 'PC',
                'slug'=> Str::slug('PC'),
            ],

            #'Armada'
            [
                'category_id' => 4,
                'name' => 'Armada',
                'slug'=> Str::slug('Armada'),
            ],

            /*Moda*/
            #'Vestido'
            [
                'category_id' => 5,
                'name' => 'Vestido',
                'slug'=> Str::slug('Vestido'),
                'color' => true,
            ],

            #'Corte'
            [
                'category_id' => 5,
                'name' => 'Corte',
                'slug'=> Str::slug('Corte'),
                'color' => true,
                'size' => true,
            ],

            #'Blusa'
            [
                'category_id' => 5,
                'name' => 'Blusa',
                'slug'=> Str::slug('Blusa'),
                'color' => true,
                'size' => true,
            ]
        ];

        foreach ($subcategories as $subcategories){
            Subcategory::factory(1)->create($subcategories);
        }
    }
}
