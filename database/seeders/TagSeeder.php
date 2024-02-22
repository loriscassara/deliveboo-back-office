<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'countries',
            ],
            [
                'name' => 'economy',
            ],
            [
                'name' => 'cucina',
            ],
            [
                'name' => 'cars',
            ],
            [
                'name' => 'AI',
            ],
            [
                'name' => 'bitcoin',
            ],
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
