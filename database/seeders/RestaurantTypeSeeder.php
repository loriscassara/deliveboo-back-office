<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $restaurantId = $faker->randomElement($this->getRestaurantID());
            $typeId = $faker->randomElement($this->getTypeID());
            $RestaurantsTypes = [
                [
                    "restaurant_id" => $restaurantId,
                    "type_id" => $typeId
                ]
            ];

            foreach ($RestaurantsTypes as $RestaurantType) {
                DB::table('restaurant_type')->updateOrInsert($RestaurantType);
            }
        }

        /*$restaurant1 = Restaurant::find(1);
        $restaurant1->types()->attach([1, 3, 4]);
        $restaurant2 = Restaurant::find(2);
        $restaurant2->types()->attach([4, 3, 1]);
        $restaurant3 = Restaurant::find(3);
        $restaurant3->types()->attach([1, 2, 5]);
        $restaurant4 = Restaurant::find(4);
        $restaurant4->types()->attach([ 2, 5]);
        $restaurant5 = Restaurant::find(5);
        $restaurant5->types()->attach([3, 4]);
        $restaurant6 = Restaurant::find(6);
        $restaurant6->types()->attach([2,3]);
        $restaurant7 = Restaurant::find(7);
        $restaurant7->types()->attach([2,3]);
        $restaurant8 = Restaurant::find(8);
        $restaurant8->types()->attach([2,3]);
        $restaurant9 = Restaurant::find(9);
        $restaurant9->types()->attach([2,3]);
        $restaurant10 = Restaurant::find(10);
        $restaurant10->types()->attach([2,3]);*/
    }

    private function getRestaurantID()
    {


        return Restaurant::all()->pluck('id');
    }

    private function getTypeID()
    {


        return Type::all()->pluck('id');
    }
}
