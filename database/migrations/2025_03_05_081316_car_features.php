<?php

use App\Models\Cars;
use App\Models\Feature;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('car_features', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('car_id'); // ID dari tabel cars
        $table->unsignedBigInteger('feature_id'); // ID dari tabel features
        $table->timestamps();

        // Menambahkan foreign key constraint
        $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};
