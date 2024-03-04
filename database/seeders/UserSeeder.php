<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
//use Faker\Generator as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(/*Faker $faker*/)
    {
        $users = [
            [
                'name' => 'Luca',
                'surname' => 'Lambiase',
                'email' => 'lucalambia@gmail.com',
                'password' => 'password123',
            ],
            [
                'name' => 'Luigi',
                'surname' => 'Verdi',
                'email' => 'luigi.verdi@example.com',
                'password' => 'segreto456',
            ],
            [
                'name' => 'Giovanna',
                'surname' => 'Bianchi',
                'email' => 'giovanna.bianchi@example.com',
                'password' => 'password1234',
            ],
            [
                'name' => 'Anna',
                'surname' => 'Neri',
                'email' => 'anna.neri@example.com',
                'password' => 'password567',
            ],
            [
                'name' => 'Marco',
                'surname' => 'Ferrari',
                'email' => 'marco.ferrari@example.com',
                'password' => 'segreto789',
            ],
            [
                'name' => 'Laura',
                'surname' => 'Russo',
                'email' => 'laura.russo@example.com',
                'password' => 'password987',
            ],
            [
                'name' => 'Giuseppe',
                'surname' => 'Gallo',
                'email' => 'giuseppe.gallo@example.com',
                'password' => 'segreto321',
            ],
            [
                'name' => 'Sara',
                'surname' => 'Costa',
                'email' => 'sara.costa@example.com',
                'password' => 'password432',
            ],
            [
                'name' => 'Paolo',
                'surname' => 'Martini',
                'email' => 'paolo.martini@example.com',
                'password' => 'segreto654',
            ],
            [
                'name' => 'Alessia',
                'surname' => 'Conti',
                'email' => 'alessia.conti@example.com',
                'password' => 'password876',
            ],
        ];

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->fill($user);
            $newUser->password = Hash::make($user['password']);
            //$newUser->password = Hash::make('password'); //Prendeva la parola password come password degli utenti           
            $newUser->save();
        }
        /*for ($i = 0; $i < 11; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->surname = $faker->name();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make('password'); //Metodo Hash, crittografa la password
            $newUser->save();
        }*/
    }
}
