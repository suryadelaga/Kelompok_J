<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BookshelfSeeder::class,
            BookSeeder::class,
            CategorySeeder::class,
            PustakawanSeeder::class,
            OwnerSeeder::class,
            KasirSeeder::class,
            LaporanSeeder::class,
        ]);
    }
}
