<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Ovdje možete definirati vaše korisnike
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password456'),
            ],
            // Dodajte više korisnika prema potrebi
        ];

        // Stvaranje korisnika
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
