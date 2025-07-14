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
        Schema::create('reservations_rooms', function (Blueprint $table) {
            $table->integer('reservationId');
            $table->integer('roomId')->index('rooms_fk');

            $table->primary(['reservationId', 'roomId']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_rooms');
    }
};
