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
        Schema::create('events_children', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('primary_txt');
            $table->string('secondary_txt');
            $table->integer('template')->index('templatefk');
            $table->integer('event')->index('eventfk');
            $table->boolean('active');
            $table->string('variables');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_children');
    }
};
