<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Nama tabel jika tidak pakai naming convention Laravel (jamak)
    protected $table = 'booking';


    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'name', 'wa_number', 'email', 'branch', 'pet_type', 'race', 'pet_name',
        'services', 'additional_request', 'date', 'time', 'address', 'note',
        'total_price', 'status'
    ];


    // protected $fillable = [
    //     'name',
    //     'wa_number',
    //     'email',
    //     'branch',
    //     'pet_type',
    //     'race',
    //     'pet_name',
    //     'services',
    //     'additional_request',
    //     'date',
    //     'time',
    //     'address',
    //     'note',
    //     'total_price',
    // ];

    // Cast kolom agar otomatis diparsing ke tipe tertentu
    protected $casts = [
        'services' => 'array', // services disimpan dalam format json
        'date' => 'date',
        'time' => 'datetime:H:i:s', // hanya waktu (jam)
    ];
}
