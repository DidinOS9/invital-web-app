<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    public function run()
    {
        // Menghapus semua data yang ada di tabel users jika diperlukan
        User::truncate();

        // Data dummy
        DB::table('users')->insert([
            [
                'name' => 'Dreamy Affairs',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'superadmin',
                'status' => 'active',
                'password' => bcrypt('12341234'),
                'remember_token' => Str::random(10), // Menggunakan Str::random() untuk menghasilkan token yang acak
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Muhammad Zainudin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('12341234'),
                'remember_token' => Str::random(10), // Menggunakan Str::random() untuk menghasilkan token yang acak
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Zulfikar Kahfi',
                'username' => 'kahfi',
                'email' => 'kahfi@gmail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('12341234'),
                'remember_token' => Str::random(10), // Menggunakan Str::random() untuk menghasilkan token yang acak
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
