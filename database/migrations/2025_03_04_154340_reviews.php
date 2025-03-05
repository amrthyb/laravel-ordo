<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai'); // Nilai ulasan
            $table->string('nama'); // Nama pemberi ulasan
            $table->text('isi'); // Isi ulasan
            $table->timestamps();
            $table->unsignedBigInteger('cars_id'); // Menyimpan ID mobil yang diulas
            // Foreign Key untuk merujuk ke tabel cars
            $table->foreign('cars_id')->references('id')->on('cars')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }

};
