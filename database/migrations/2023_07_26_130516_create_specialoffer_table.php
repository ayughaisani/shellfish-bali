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
        Schema::create('specialoffer', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->integer('nama');
            $table->integer('lokasi');
            $table->integer('keterangan');
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
        Schema::dropIfExists('specialoffer');
    }
};
