<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kasirs')->insert(
            [
                [
                    'Tanggal' => '11/05/2024',
                    'Kode_transaksi' => '085721',
                    'Nama_pelanggan' => 'Muklis',
                    'Total' => '114.000',
                    'HPP' => '130.000',
                    'Laba' => '14.000',
                ],
                [
                    'Tanggal' => '12/05/2024',
                    'Kode_transaksi' => '085722',
                    'Nama_pelanggan' => 'Sulaiman',
                    'Total' => '114.000',
                    'HPP' => '130.000',
                    'Laba' => '14.000',
                ],
                [
                    'Tanggal' => '13/05/2024',
                    'Kode_transaksi' => '085723',
                    'Nama_pelanggan' => 'Hasan',
                    'Total' => '114.000',
                    'HPP' => '130.000',
                    'Laba' => '14.000',
                ],
            ]
        );
    }
}
