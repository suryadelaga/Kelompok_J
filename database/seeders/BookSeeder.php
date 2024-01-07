<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                [
                    'title' => 'Laskar pelangi',
                    'author' => 'Andrea Hirata',
                    'year' => '2005',
                    'publisher' => 'Bentang Pustaka',
                    'city' => 'Indonesia',
                    'cover' => 'peter.jpg',
                    'qty' => '70',
                    'bookshelf_id' => '4',
                ],
            ]
        );
    }
}
