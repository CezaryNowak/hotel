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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roomId');
            $table->unsignedBigInteger('userId');
            $table->foreign('roomId')->references('id')->on('rooms');
            $table->foreign('userId')->references('id')->on('users');
            $table->dateTime('checkInDate');
            $table->dateTime('checkOutDate');
            $table->boolean('canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
