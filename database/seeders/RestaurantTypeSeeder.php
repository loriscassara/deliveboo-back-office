<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $restaurantId = $this->getRestaurantID();
            $typeId = $this->getTypeID();
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
    }

    private function getRestaurantID() {


        return Restaurant::all()->pluck('id');
    }

    private function getTypeID() {


        return Type::all()->pluck('id');
    }
}
