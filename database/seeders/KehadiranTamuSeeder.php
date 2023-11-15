<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kehadiran;

class KehadiranTamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kehadiran::create([
            'tamu_id' => 3, // Gantilah dengan user_id yang sesuai
        ]);
    }
}
