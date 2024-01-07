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
        Schema::create('books', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('title', 255);
            $table->string('author', 255);
            $table->year('year', 4);
            $table->string('publisher', 255);
            $table->string('city', 255);
            $table->string('cover', 255);
            $table->integer('qty');
            $table->bigInteger('bookshelf_id')->unsigned();
            $table->foreign('bookshelf_id')->references('id')->on('bookshelfs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
