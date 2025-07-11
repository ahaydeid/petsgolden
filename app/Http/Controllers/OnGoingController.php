<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class OnGoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        $booking = Booking::all();
        $bookingDetail = Booking::findOrFail($id);
        return view ('editongoing', compact('booking', 'bookingDetail'));
    }


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $booking = Booking::findOrFail($id);

    // Karena hanya ada satu opsi "ongoing", langsung set
    $booking->status = 'done';

    $booking->save();
    return redirect()->route('ongoingrequest.ongoing')->with('success', 'Request updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
