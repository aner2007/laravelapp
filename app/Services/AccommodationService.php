<?php

namespace App\Services;

use App\Models\Accommodation;

class AccommodationService
{
/*    public function getAvailableAccommodations()
    {
        // Dohvati sve slobodne smještaje
        return Accommodation::where('status', 'slobodan')->get();
    }
*/
    public function getAvailableAccommodations()
    {
        $today = date('Y-m-d');
        
        // Dohvati sve slobodne smještaje
        $accommodations = Accommodation::where('status', 'slobodan')
            ->whereDoesntHave('bookings', function ($query) use ($today) {
                $query->where('check_out', '>=', $today);
            })
            ->get();
        
        return $accommodations;
    }
    

    public function markAccommodationAsReserved($accommodationId)
    {
        // Označi smještaj kao rezerviran
        $accommodation = Accommodation::findOrFail($accommodationId);
        $accommodation->status = 'reserved';
        $accommodation->save();
    }
    public function getAccommodations()
    {
       
        return Accommodation::all();
        // Dohvati sve smještaje
    }
   
    public function createAccommodation($data)
    {
        // Stvori novi smještaj
        return Accommodation::create($data);
    }

    public function getAccommodationDetails($accommodationId)
    {
        // Dohvati detalje o smještaju
        return Accommodation::findOrFail($accommodationId);
    }

    public function updateAccommodation($accommodationId, $data)
    {
        // Ažuriraj smještaj
        $accommodation = Accommodation::findOrFail($accommodationId);
        $accommodation->update($data);
    }

    public function deleteAccommodation($accommodationId)
    {
        // Obriši smještaj
        $accommodation = Accommodation::findOrFail($accommodationId);
        $accommodation->delete();
    }
}
