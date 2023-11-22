<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Menghapus semua data yang ada di tabel users jika diperlukan
        // Tamu::truncate();

        // Data dummy
        DB::table('tamu')->insert([
            [
                'id_suami' => '2',
                'nama_tamu' => 'Muhammad',
                'kelamin' => 'Laki-Laki',
                'alamat' => 'Banyuwangi',
                'status' => 'VVIP'
            ],
            [
                'id_suami' => '2',
                'nama_tamu' => 'Bambang',
                'kelamin' => 'Laki-Laki',
                'alamat' => 'Banyuwangi',
                'status' => 'VVIP'
            ],
            [
                'id_suami' => '2',
                'nama_tamu' => 'Milla',
                'kelamin' => 'Perempuan',
                'alamat' => 'Banyuwangi',
                'status' => 'Regular'
            ],
            [
                'id_suami' => '3',
                'nama_tamu' => 'Khoirunnisa',
                'kelamin' => 'Perempuan',
                'alamat' => 'Banyuwangi',
                'status' => 'VVIP'
            ],
            [
                'id_suami' => '3',
                'nama_tamu' => 'Prabowo',
                'kelamin' => 'Laki-Laki',
                'alamat' => 'Banyuwangi',
                'status' => 'VVIP'
            ],
            [
                'id_suami' => '3',
                'nama_tamu' => 'Gibran',
                'kelamin' => 'Laki-Laki',
                'alamat' => 'Banyuwangi',
                'status' => 'VVIP'
            ]
        ]);
    }
}
