<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run()
    {
        // Ovdje možete definirati svoje rezervacije
        $bookings = [
            [
                'user_id' => 1,
                'accommodation_id' => 1,
                'start_date' => '2023-05-20',
                'end_date' => '2023-05-21',
            ],
            [
                'user_id' => 2,
                'accommodation_id' => 2,
                'start_date' => '2023-05-22',
                'end_date' => '2023-05-25',
            ],
            // Dodajte više rezervacija prema potrebi
        ];

        // Stvaranje rezervacija
        foreach ($bookings as $bookingData) {
            Booking::create($bookingData);
        }
    }
}
