<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    DB::table('testimonials')->insert([
        [
            'name' => 'Evelyn',
            'testimonial' => 'Layanannya luar biasa! Kucing saya senang sekali.',
            'foto' => 'evelyn.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'John Doe',
            'testimonial' => 'Cepat dan bersih. Saya puas dengan hasilnya.',
            'foto' => 'john.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}

}
