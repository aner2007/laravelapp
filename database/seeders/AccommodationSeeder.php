<?php 
namespace Database\Seeders;

use App\Models\Accommodation;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Seeder;

class AccommodationSeeder extends Seeder
{
    public function run()
    {
        // Stvaranje smještaja
        Accommodation::factory()->count(10)->create();

        // Povezivanje rezervacija s korisnicima
        $accommodations = Accommodation::all();
        $users = User::all();

        foreach ($accommodations as $accommodation) {
            // Odabir slučajnog korisnika za rezervaciju
            $user = $users->random();

            // Stvaranje rezervacije
            $booking = Booking::factory()->create([
                'user_id' => $user->id,
                'accommodation_id' => $accommodation->id,
            ]);

            // Dodavanje nove rezervacije u kolekciju rezervacija smještaja
            $accommodation->bookings()->save($booking);
        }
    }
}
