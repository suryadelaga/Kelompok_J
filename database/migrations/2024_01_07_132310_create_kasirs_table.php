<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kasirs', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('Tanggal',10);
            $table->string('Kode_transaksi', 255);
            $table->string('Nama_pelanggan', 255);
            $table->integer('Total');
            $table->integer('HPP');
            $table->integer('Laba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs');
    }
};
