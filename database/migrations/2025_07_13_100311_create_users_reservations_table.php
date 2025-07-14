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
        Schema::create('users_reservations', function (Blueprint $table) {
            $table->integer('userId');
            $table->integer('reservationId');
            $table->boolean('verified')->default(true);
            $table->boolean('outside')->default(false);
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_reservations');
    }
};
