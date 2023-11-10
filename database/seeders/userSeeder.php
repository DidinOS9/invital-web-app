<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    public function run()
    {
        // Menghapus semua data yang ada di tabel users jika diperlukan
        User::truncate();

        // Data dummy
        $users = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => now(),
                'password' => 'admin',
                'phone_number' => '123-456-7890',
                'instagram' => 'kucing_instagram',
                'remember_token' => Str::random(10), // Menggunakan Str::random() untuk menghasilkan token yang acak
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data dummy lainnya di sini
        ];

        // Menyisipkan data dummy ke dalam tabel 'users' menggunakan model Eloquent
        User::insert($users);
    }
}
