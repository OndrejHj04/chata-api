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
        Schema::table('events_children', function (Blueprint $table) {
            $table->foreign(['event'], 'eventFK')->references(['id'])->on('events')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['template'], 'templateFK')->references(['id'])->on('templates')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events_children', function (Blueprint $table) {
            $table->dropForeign('eventFK');
            $table->dropForeign('templateFK');
        });
    }
};
