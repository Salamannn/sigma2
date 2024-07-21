<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'no_telp' => '0888888888',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'alamat' => '-',
            'kode_roles' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'nlr',
            'no_telp' => '0877777',
            'email' => 'nlr@gmail.com',
            'password' => Hash::make('password'),
            'alamat' => '-',
            'kode_roles' => 2,
            'kode_posyandu' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
