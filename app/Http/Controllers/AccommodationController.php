<?php
namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index()
    {
        $accommodations = Accommodation::where('status', 'slobodan')->get();
        //ako zelimo da vratimo rezultate u json
        //return response()->json($accommodations);
        //ako zelimo preko view prikazati onda cemo ovako
         return view('accommodations.index', compact('accommodations'));
    }

    public function updateStatus(Request $request, $id)
    {
        $accommodation = Accommodation::findOrFail($id);
        $accommodation->status = 'zauzet';
        $accommodation->save();
        return response()->json(['message' => 'Status updated successfully']);
    }
}

