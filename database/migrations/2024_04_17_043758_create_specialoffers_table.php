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
        Schema::create('specialoffers', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('nama');
            $table->string('lokasi');
            $table->text('keterangan');
            $table->integer('harga');
            $table->timestamps();
            $table->string('promo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialoffers');
    }
};
