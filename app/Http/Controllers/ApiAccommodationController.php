<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;
use App\Services\AccommodationService;


class ApiAccommodationController extends Controller
{
    private $accommodationService;

public function __construct(AccommodationService $accommodationService)
{
    $this->accommodationService = $accommodationService;
}

    public function index()
    {
        
       // $accommodations = Accommodation::where('status', 'slobodan')->get();
       $accommodations = $this->accommodationService->getAvailableAccommodations();

         //ako zelimo da vratimo rezultate u json
        //return response()->json($accommodations);
        //ako zelimo preko view prikazati onda cemo ovako
        return view('accommodations.index', compact('accommodations'));
    }
}
