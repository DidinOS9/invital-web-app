<?php

namespace Database\Seeders;

use App\Models\Acara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Menghapus semua data yang ada di tabel users jika diperlukan
        Acara::truncate();

        // Data dummy
        DB::table('acara')->insert([
            [
                'id_nama_suami' => '2',
                'nama_ayah_suami' => 'Muhrizin',
                'nama_ibu_suami' => 'Fatimah',
                'nama_istri' => 'Qomariatun',
                'nama_ayah_istri' => 'Bambang',
                'nama_ibu_istri' => 'Suliana',
                'hari_akad' => 'Senin',
                'tgl_akad' => '2023-11-14',
                'jam_mulai_akad' => '07:00',
                'jam_selesai_akad' => '08:00',
                'alamat_akad' => 'Banyuwangi',
                'hari_resepsi' => 'Selasa',
                'tgl_resepsi' => '2023-11-15',
                'jam_mulai_resepsi' => '07:00',
                'jam_selesai_resepsi' => '08:00',
                'alamat_resepsi' => 'Banyuwangi'
            ],
            [
                'id_nama_suami' => '3',
                'nama_ayah_suami' => 'Eka Febriansyah',
                'nama_ibu_suami' => 'Amalia',
                'nama_istri' => 'Silfi Gabril',
                'nama_ayah_istri' => 'Sulthonah',
                'nama_ibu_istri' => 'Sitimah',
                'hari_akad' => 'Senin',
                'tgl_akad' => '2023-11-14',
                'jam_mulai_akad' => '07:00',
                'jam_selesai_akad' => '08:00',
                'alamat_akad' => 'Banyuwangi',
                'hari_resepsi' => 'Selasa',
                'tgl_resepsi' => '2023-11-15',
                'jam_mulai_resepsi' => '07:00',
                'jam_selesai_resepsi' => '08:00',
                'alamat_resepsi' => 'Banyuwangi'
            ]
        ]);
    }
}
