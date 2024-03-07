<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'italiano',
                'cover_image' => ''
            ],
            [
                'name' => 'internazionale',
                'cover_image' => ''
            ],
            [
                'name' => 'cinese',
                'cover_image' => ''
            ],
            [
                'name' => 'giapponese',
                'cover_image' => ''
            ],
            [
                'name' => 'messicano',
                'cover_image' => ''
            ],
            [
                'name' => 'indiano',
                'cover_image' => ''
            ],
            [
                'name' => 'pesce',
                'cover_image' => ''
            ],
            [
                'name' => 'carne',
                'cover_image' => ''
            ],
            [
                'name' => 'pizza',
                'cover_image' => ''
            ],
            [
                'name' => 'thailandese',
                'cover_image' => ''
            ],
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
