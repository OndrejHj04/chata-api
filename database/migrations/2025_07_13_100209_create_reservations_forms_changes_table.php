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
        Schema::create('reservations_forms_changes', function (Blueprint $table) {
            $table->id();
            $table->integer('reservation_id')->index('reservations_forms_changes');
            $table->string('form_id', 512);
            $table->boolean('direction');
            $table->string('form_public_url', 512)->nullable();
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_forms_changes');
    }
};
