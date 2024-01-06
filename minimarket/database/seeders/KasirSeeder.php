<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KasirSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kasir Name',
            'email' => 'kasir@example.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
        ]);

        // Tambahkan lebih banyak data kasir jika diperlukan
    }
}
