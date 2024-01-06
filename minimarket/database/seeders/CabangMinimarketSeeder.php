<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangMinimarketSeeder extends Seeder
{
    public function run()
    {
        DB::table('cabang_minimarket')->insert([
            'nama_cabang' => 'Cabang A',
        ]);

        DB::table('cabang_minimarket')->insert([
            'nama_cabang' => 'Cabang B',
        ]);

        // Tambahkan lebih banyak data cabang jika diperlukan
    }
}
