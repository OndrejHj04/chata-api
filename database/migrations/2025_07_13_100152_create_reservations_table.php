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
            $table->integer('id')->primary();
            $table->date('from_date');
            $table->date('to_date');
            $table->string('name');
            $table->string('purpouse');
            $table->integer('leader')->nullable()->index('reservation_leaderfk');
            $table->string('instructions');
            $table->integer('status')->index('reservation_statusfk');
            $table->timestamp('creation_date')->useCurrent();
            $table->string('success_link', 512)->nullable();
            $table->string('payment_symbol')->nullable();
            $table->string('reject_reason', 512)->nullable();
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
