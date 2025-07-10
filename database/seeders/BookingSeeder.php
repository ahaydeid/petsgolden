<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('booking')->insert([
            [
                'name' => 'Aldo Pratama',
                'wa_number' => '08123456111',
                'email' => 'aldo@mail.com',
                'branch' => 'Jakarta',
                'pet_type' => 'Dog',
                'race' => 'Golden Retriever',
                'pet_name' => 'Browny',
                'services' => json_encode(['Grooming', 'Shaving']),
                'additional_request' => 'Tolong jangan disemprot parfum',
                'date' => '2025-07-20',
                'time' => '14:00:00',
                'address' => 'Jl. Sudirman No. 88, Jakarta Selatan',
                'note' => 'Parkir di samping rumah makan',
                'total_price' => 250000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Sinta Dewi',
                'wa_number' => '08123456222',
                'email' => null,
                'branch' => 'Bogor',
                'pet_type' => 'Cat',
                'race' => 'Anggora',
                'pet_name' => 'Snowy',
                'services' => json_encode(['Bathing']),
                'additional_request' => null,
                'date' => '2025-07-22',
                'time' => '10:30:00',
                'address' => 'Perumahan Griya Asri Blok D12, Bogor',
                'note' => null,
                'total_price' => 100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Riko Wijaya',
                'wa_number' => '08123456333',
                'email' => 'riko.wj@mail.com',
                'branch' => 'Depok',
                'pet_type' => 'Snake',
                'race' => 'Ball Python',
                'pet_name' => 'Luna',
                'services' => json_encode(['Vit Injection', 'Cutting Nails']),
                'additional_request' => 'Gunakan sarung tangan, ular agresif',
                'date' => '2025-07-25',
                'time' => '09:00:00',
                'address' => 'Jl. Margonda Raya No. 12, Depok',
                'note' => 'Tolong hubungi sebelum sampai',
                'total_price' => 100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
