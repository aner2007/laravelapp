<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run()
    {
        $accommodations = Accommodation::all();
        $users = User::all();

        foreach ($accommodations as $accommodation) {
            // Odabir slučajnog korisnika za rezervaciju
            $user = $users->random();

            // Stvaranje rezervacije
            Booking::factory()->create([
                'user_id' => $user->id,
                'accommodation_id' => $accommodation->id,
            ]);
        }
    }
}
