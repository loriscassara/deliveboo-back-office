<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'user_id' => '1',
                'business_name' => 'Ristorante La Pergola',
                'description' => 'Cucina raffinata con vista panoramica.',
                'address' => 'Via Roma, 123',
                'P_IVA' => '12345678901',
                'phone' => '0123456789',
                'cover_image' => ''
            ],
            [
                'user_id' => '2',
                'business_name' => 'Trattoria Nonna Maria',
                'description' => 'Autentica cucina casalinga, piatti tradizionali.',
                'address' => 'Via Garibaldi, 45',
                'P_IVA' => '98765432109',
                'phone' => '0123987654',
                'cover_image' => ''
            ],
            [
                'user_id' => '3',
                'business_name' => 'Osteria del Sole',
                'description' => 'Atmosfera accogliente, piatti regionali genuini.',
                'address' => 'Corso Vittorio Emanuele, 78',
                'P_IVA' => '56789012345',
                'phone' => '0123567890',
                'cover_image' => ''
            ],
            [
                'user_id' => '4',
                'business_name' => 'Pizzeria Buon Gusto',
                'description' => 'Pizze artigianali cotte nel forno a legna.',
                'address' => 'Via Milano, 12',
                'P_IVA' => '09876543210',
                'phone' => '0123098765',
                'cover_image' => ''
            ],
            [
                'user_id' => '5',
                'business_name' => 'Ristorante da Giuseppe',
                'description' => 'Specialità di pesce fresco e cucina mediterranea.',
                'address' => 'Piazza Dante, 3',
                'P_IVA' => '54321098765',
                'phone' => '0123543210',
                'cover_image' => ''
            ],
            [
                'user_id' => '6',
                'business_name' => 'Trattoria Bella Napoli',
                'description' => 'Sapori autentici della cucina partenopea.',
                'address' => 'Via Napoli, 10',
                'P_IVA' => '13579246801',
                'phone' => '0123135792',
                'cover_image' => ''
            ],
            [
                'user_id' => '7',
                'business_name' => 'Osteria del Pescatore',
                'description' => 'Piatti di pesce fresco e frutti di mare.',
                'address' => 'Lungomare Marconi, 20',
                'P_IVA' => '24680135792',
                'phone' => '0123246801',
                'cover_image' => ''
            ],
            [
                'user_id' => '8',
                'business_name' => 'Ristorante al Castello',
                'description' => 'Atmosfera elegante e menu gourmet.',
                'address' => 'Via Castello, 1',
                'P_IVA' => '67890123456',
                'phone' => '0123678901',
                'cover_image' => ''
            ],
            [
                'user_id' => '9',
                'business_name' => 'Pizzeria da Mario',
                'description' => 'Pizze classiche e creative, impasto tradizionale.',
                'address' => 'Via Vesuvio, 15',
                'P_IVA' => '98701234567',
                'phone' => '0123987012',
                'cover_image' => ''
            ],
            [
                'user_id' => '10',
                'business_name' => 'Trattoria della Nonna',
                'description' => 'Piatti della tradizione cucinati con amore e passione.',
                'address' => 'Via delle Rose, 8',
                'P_IVA' => '67890543210',
                'phone' => '0123678905',
                'cover_image' => ''
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $newRestaurant = new Restaurant();
            $newRestaurant->fill($restaurant);
            $newRestaurant->save();
        }
    }
}
