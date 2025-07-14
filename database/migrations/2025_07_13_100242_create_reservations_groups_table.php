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
        Schema::create('reservations_groups', function (Blueprint $table) {
            $table->integer('reservationId');
            $table->integer('groupId')->index('groups_fk');

            $table->primary(['reservationId', 'groupId']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_groups');
    }
};
