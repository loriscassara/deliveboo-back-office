<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'restaurant_id' => 1,
                'name' => 'Pizza Margherita',
                'ingredients' => 'Pomodoro, mozzarella, basilico',
                'price' => 8.50,
                'description' => 'Pizza classica con pomodoro, mozzarella e basilico fresco.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Sushi Misto',
                'ingredients' => 'Salmone, tonno, avocado, riso',
                'price' => 12.99,
                'description' => 'Assortimento di sushi fresco con salmone, tonno, e avocado.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Taco al Pastor',
                'ingredients' => 'Carne di maiale marinata, cipolla, coriandolo',
                'price' => 6.75,
                'description' => 'Taco tradizionale con carne di maiale marinata, cipolla e coriandolo fresco.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Pasta Carbonara',
                'ingredients' => 'Pancetta, uova, pecorino, pepe',
                'price' => 10.25,
                'description' => 'Pasta spaghetti con salsa a base di pancetta, uova, pecorino e pepe nero.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Insalata Vegana',
                'ingredients' => 'Lattuga, pomodori, cetrioli, avocado, mais',
                'price' => 7.99,
                'description' => 'Insalata fresca e croccante con verdure miste e avocado.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Hamburger Classico',
                'ingredients' => 'Manzo, formaggio, lattuga, pomodoro, sottaceti',
                'price' => 9.50,
                'description' => 'Hamburger classico con carne di manzo, formaggio fuso, lattuga, pomodoro e sottaceti.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Tempura di Gamberi',
                'ingredients' => 'Gamberi, pastella, salsa teriyaki',
                'price' => 14.75,
                'description' => 'Gamberi fritti in pastella croccante, serviti con salsa teriyaki.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Burrito Vegetariano',
                'ingredients' => 'Fagioli neri, riso, peperoni, mais, guacamole',
                'price' => 8.99,
                'description' => 'Burrito vegetariano con fagioli neri, riso, peperoni, mais e guacamole.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Gelato alla Fragola',
                'ingredients' => 'Fragole fresche, panna, zucchero',
                'price' => 5.25,
                'description' => 'Gelato artigianale alla fragola fatto con fragole fresche, panna e zucchero.',
                'visible' => true,
                'image' => '',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Patatine Fritte',
                'ingredients' => 'Patate, olio, sale',
                'price' => 3.99,
                'description' => 'Patatine fritte croccanti e saporite, perfette come contorno o spuntino.',
                'visible' => true,
                'image' => '',
            ],
        ];

        foreach ($products as $product) {
            $newRestaurant = new Product();
            $newRestaurant->fill($product);
            $newRestaurant->save();
        }
    }
}
