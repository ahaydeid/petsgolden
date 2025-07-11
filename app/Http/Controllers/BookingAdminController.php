<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view ('loginadmin');
    }

    public function index()
    {
        // $booking = Booking::all();
        $booking = Booking::where('status', 'pending')->get();
        return view ('pendingrequest', compact('booking'));
    }


    public function ongoing()
    {

        $booking = Booking::where('status', 'ongoing')->get();
        return view ('ongoingrequest', compact('booking'));
    }

    public function history()
    {

        $booking = Booking::where('status', 'done')->get();
        return view ('history', compact('booking'));
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
        return view ('reviewrequest', compact('booking', 'bookingDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);

        // Status logic dari tombol
        if ($request->input('action') === 'accept') {
            $booking->status = 'waiting';
        } elseif ($request->input('action') === 'reject') {
            $booking->status = 'rejected';
        }

        $booking->save();

        return redirect()->route('pendingrequest.index')->with('success', 'Request updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
