<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert(
            [
                [
                    'code' => 'BKSSH001',
                    'name' => 'Superhero',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'BKSSH002',
                    'name' => 'Komedi',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'BKSSH003',
                    'name' => 'Horror',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'code' => 'BKSSH004',
                    'name' => 'Drama',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
