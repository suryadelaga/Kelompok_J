<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang')->insert([
            'kode_barang' => 'B001',
            'nama_barang' => 'Barang A',
            'stok' => 100,
            'harga' => 5000.00,
        ]);

        DB::table('barang')->insert([
            'kode_barang' => 'B002',
            'nama_barang' => 'Barang B',
            'stok' => 150,
            'harga' => 8000.00,
        ]);

        // Tambahkan lebih banyak data barang jika diperlukan
    }
}
