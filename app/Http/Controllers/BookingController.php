<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|min:3',
        'wa_number' => 'required|string|min:10',
        'email' => 'nullable|email',
        'branch' => 'required|string',
        'pet_type' => 'required|string',
        'race' => 'nullable|string',
        'pet_name' => 'nullable|string',
        'services' => 'required|array|min:1',
        'services.*' => 'string',
        'additional_request' => 'nullable|string',
        'date' => 'required|date',
        'time' => 'required',
        'address' => 'required|string',
        'note' => 'nullable|string',
        'total_price' => 'required|numeric|min:0',
    ]);

    $validated['services'] = json_encode($validated['services']);

    Booking::create($validated);

    return redirect()->back()->with('success', 'Booking berhasil dikirim!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
