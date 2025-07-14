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
        Schema::create('reservations_forms', function (Blueprint $table) {
            $table->string('form_id', 512)->primary();
            $table->string('form_public_url', 512);
            $table->integer('reservation_id')->index('reservations_form_reservationfk');
            $table->integer('user_id')->index('reservations_form_userfk');
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_forms');
    }
};
