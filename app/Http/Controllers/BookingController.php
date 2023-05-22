<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Accommodation;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function create()
{
    $accommodations = Accommodation::all();
    return view('booking_create', compact('accommodations'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'accommodation_id' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
    ]);

    Booking::create([
        'user_id' => auth()->user()->id,
        'accommodation_id' => $validatedData['accommodation_id'],
        'start_date' => $validatedData['start_date'],
        'end_date' => $validatedData['end_date'],
    ]);

    return redirect()->route('home')->with('success', 'Rezervacija je uspješno kreirana.');
}

}
