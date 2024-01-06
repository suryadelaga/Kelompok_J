<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Owner
        DB::table('users')->insert([
            'name' => 'Owner Name',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
            'role' => 'owner',
        ]);

        // Supervisor
        DB::table('users')->insert([
            'name' => 'Supervisor Name',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('password'),
            'role' => 'supervisor',
        ]);

        // Kasir
        DB::table('users')->insert([
            'name' => 'Kasir Name',
            'email' => 'kasir@example.com',
            'password' => Hash::make('password'),
            'role' => 'kasir',
        ]);

        // Gudang
        DB::table('users')->insert([
            'name' => 'Gudang Name',
            'email' => 'gudang@example.com',
            'password' => Hash::make('password'),
            'role' => 'gudang',
        ]);
    }
}
