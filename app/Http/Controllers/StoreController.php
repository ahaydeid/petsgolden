<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function customer()
    {
        $products = Store::all();
        return view('store', compact('products'));
    }

    public function index()
    {
        $products = Store::all();
        return view('adminstore', compact('products'));
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
        'nama_produk' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required',
        'jumlah' => 'required',
        'foto' => 'required|image',
    ]);

    // Simpan foto ke folder 'store' di storage
    if ($request->hasFile('foto')) {
        $validated['foto'] = $request->file('foto')->store('products', 'public');
    }
    Store::create($validated);

    return redirect()->route('store.admin')->with('success', 'Produk berhasil ditambahkan!');
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
