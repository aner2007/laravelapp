<?php
// app/Http/Controllers/Admin/AccommodationController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AccommodationService;
use App\Models\Accommodation;
use Illuminate\Http\Request;


class AccommodationController extends Controller
{
    protected $accommodationService;

    public function __construct(\App\Services\AccommodationService $accommodationService)
    {
        $this->accommodationService = $accommodationService;
    }
    

    public function index()
    {
       $accommodations = $this->accommodationService->getAccommodations();
       
        return view('admin.accommodations.index', compact('accommodations'));
    }

    public function create()
    {
        return view('admin.accommodations.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $this->accommodationService->createAccommodation($data);
        return redirect()->route('admin.accommodations.index');
    }
    

    public function edit($id)
    {
        $accommodation = Accommodation::findOrFail($id);
        return view('admin.accommodations.edit', compact('accommodation'));
    }

    public function update(Request $request, $id)
{
    $data = $request->except('_token');
    $this->accommodationService->updateAccommodation($id, $data);
    return redirect()->route('admin.accommodations.index');
}


    public function destroy($id)
    {
        $this->accommodationService->deleteAccommodation($id);
        return redirect()->route('admin.accommodations.index');
    }
}
