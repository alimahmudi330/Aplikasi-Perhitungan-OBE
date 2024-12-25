<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Mencari pengguna dengan email admin
    $adminUser = User::where('email', 'admin@gmail.com')->first();

    if ($adminUser) {
        // Jika pengguna ditemukan, perbarui password
        $adminUser->password = bcrypt('admin1234'); // Hash password baru
        $adminUser->save(); // Simpan perubahan
    } else {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
            'role' => 'admin',
        ]);
    }
}
}
