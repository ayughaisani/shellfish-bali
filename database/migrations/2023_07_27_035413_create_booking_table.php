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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('country');
            $table->string('email');
            $table->string('phone');
            $table->string('participant');
            $table->text('message');
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id')->references('id')->on('destination')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('transportation_id');
            $table->foreign('transportation_id')->references('id')->on('transportation')->onDelete('cascade')->onUpdate('cascade');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
