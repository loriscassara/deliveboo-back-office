<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'cronaca',
                'description' => 'articoli che riguardano fatti di cronaca',
            ],
            [
                'name' => 'tecnologia',
                'description' => 'troverai le più recenti novità in ambito hi-tech',
            ],
            [
                'name' => 'sport',
                'description' => 'non guardo il calcio',
            ]
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->fill($category);
            $newCategory->save();
        }
    }
}
