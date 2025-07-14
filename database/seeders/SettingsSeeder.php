<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'id' => 1,
                'allow_mail_sending' => true,
                'main_application_email' => 'chata@gjkt.eu',
                'registration_document_spreadsheet' => 'https://docs.google.com/spreadsheets/d/1nRlz1rJNI2w_8swHMml3b_9n46t7Aaj-XCAkUvm-qq0/edit?gid=1726452878#gid=1726452878',
                'whole_object' => 1000,
                'public_payment' => 100,
                'employees_payment' => 50,
                'ZO_payment' => 75,
                'bank_account_number' => 'fix-me',
                'payment_symbol_format' => '25$Z$Z$Z$Z$K$K$K$K',
            ],
        ];

        DB::table('settings')->insert($settings);
    }
}