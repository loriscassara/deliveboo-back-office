<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Product;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //order_id	product_id	item_quantity
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $orderId = $faker->randomElement($this->getOrderID());
            $productId = $faker->randomElement($this->getProductID());
            $productQuantity = $faker->randomDigit(0);
            $OrdersProducts = [
                [
                    "order_id" => $orderId,
                    "product_id" => $productId,
                    "item_quantity" => $productQuantity
                ]
            ];

            foreach ($OrdersProducts as $OrderProduct) {
                DB::table('order_product')->updateOrInsert($OrderProduct);
            }
        }
    }


    private function getOrderID()
    {
        return Order::all()->pluck('id');
    }

    private function getProductID()
    {
        return Product::all()->pluck('id');
    }
}






    // public function run(): void
    // {
        //	order_id	product_id	item_quantity

        // foreach ($orders as $order) {
        //     $newOrder = new Order();
        //     $newOrder->fill($order);
        //     $newOrder->save();
        // }
    // }
