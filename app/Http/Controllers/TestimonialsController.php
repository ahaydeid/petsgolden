<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view ('testimonials', compact('testimonials'));
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
            'testimonial' => 'required|string',
            'foto' => 'required|image',
        ]);

        // Simpan foto ke folder public/storage/testimonials
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        Testimonials::create($validated);
        
        // dd($validated);
        return redirect()->back()->with('success', 'Testimonial berhasil ditambahkan!');
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
        $testimonials = Testimonials::all();
        $testimonialsDetail = Testimonials::findOrFail($id);
        return view ('edittestimonials', compact('testimonials', 'testimonialsDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonials = Testimonials::findOrFail($id);

        // Validasi input (foto tidak wajib saat update)
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'testimonial' => 'required|string',
            'foto' => 'nullable|image',
        ]);

        // Jika ada foto baru di-upload
        if ($request->hasFile('foto')) {
            // Simpan foto baru
            $validated['foto'] = $request->file('foto')->store('testimonials', 'public');
        } else {
            // Gunakan foto lama
            $validated['foto'] = $testimonials->foto;
        }

        // Update data
        $testimonials->update($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonialsDetail = Testimonials::findOrFail($id);
        $testimonialsDetail->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted!');
        
    }
}
