<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Gabas',
                'first_name' => 'Euni',
                'middle_name' => 'Req',
                'address' => 'Sagbayan, Bohol',
                'birth_date' => '2002-10-23',
                'phone_number' => '09121244888',
                'email' => 'eunizelgabas24@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Gabas',
                'first_name' => 'Eula',
                'middle_name' => 'Requierme',
                'address' => 'Santa cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994585',
                'email' => 'gabaseula@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Gabs',
                'first_name' => 'Euls',
                'middle_name' => 'Developer',
                'address' => 'Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '0987654321',
                'email' => 'eulagabas28@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Gabas',
                'first_name' => 'Eunizel',
                'middle_name' => 'Requierme',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'eunizelgabas06@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Requierme',
                'first_name' => 'Euniz',
                'middle_name' => 'Mira',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'geunizel@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Gbas',
                'first_name' => 'Slue',
                'middle_name' => 'Mira',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'eulagabas00@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Cosgafa',
                'first_name' => 'Lyra',
                'middle_name' => 'Lauron',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'lyra12552@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Mellomida',
                'first_name' => 'Justine',
                'middle_name' => 'Vistal',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'justinemellomida70@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Gabas',
                'first_name' => 'Edgardo',
                'middle_name' => 'Mira',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'edgardogabas2@gmail.com',
                'initial_deposit' => 1000,
            ],
            [
                'last_name' => 'Requierme',
                'first_name' => 'Adel',
                'middle_name' => 'Mira',
                'address' => 'Santa Cruz, Sagbayan, Bohol',
                'birth_date' => '2002-06-24',
                'phone_number' => '09518994185',
                'email' => 'eunicegabas9@gmail.com',
                'initial_deposit' => 1000,
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
