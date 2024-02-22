<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'name' => 'progetto 1',
                'description' => 'descrizione lunga',
                'category_id' => 3
            ],
            [
                'name' => 'progetto 2',
                'description' => 'descrizione lunga 2',
            ],
            [
                'name' => 'progetto 3',
                'description' => 'descrizione lunga 3',
            ]
        ];

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->fill($post);
            $newPost->save();
        }
    }
}
