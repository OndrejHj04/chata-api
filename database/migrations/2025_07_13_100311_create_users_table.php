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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('role');
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->boolean('verified')->default(false);
            $table->string('adress')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('ID_code')->nullable();
            $table->boolean('theme')->default(true);
            $table->integer('organization')->nullable();
            $table->boolean('children')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
