<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            [
                'name' => 'Celulares y tablets',
                'slug'=> Str::slug('Celulares y tablets'),
                'icon' => '<i class="fa-sharp fa-light fa-mobile-notch"></i>'
            ],
            
            [
                'name' => 'Ceramica',
                'slug'=> Str::slug('Ceramica'),
                'icon' => '<i class="fa-sharp fa-light fa-brush"></i>'
            ],

            [
                'name' => 'Calzado',
                'slug'=> Str::slug('Calzado'),
                'icon' => '<i class="fa-sharp fa-light fa-boot-heeled"></i>'               
            ],

            [
                'name' => 'Computación',
                'slug'=> Str::slug('Computación'),
                'icon' => '<i class="fa-sharp fa-light fa-laptop"></i>'
            ],

            [
                'name' => 'Moda',
                'slug'=> Str::slug('Moda'),
                'icon' => '<i class="fa-sharp fa-light fa-child-dress"></i>',
            ],
        ];

        foreach ($categories as $category){
            Category::factory(1)->create($category);
        }
    }
} 
