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
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->boolean('allow_mail_sending');
            $table->string('main_application_email');
            $table->string('registration_document_spreadsheet');
            $table->integer('whole_object');
            $table->integer('public_payment');
            $table->integer('employees_payment');
            $table->integer('ZO_payment');
            $table->string('bank_account_number');
            $table->string('payment_symbol_format', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
