<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsFormsChangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservationsFormsChanges = [
            [
                'id' => 1,
                'reservation_id' => 240,
                'form_id' => '1TjdjhSBsGxhqTIOH0U1Slm0_D-G48eNBb18Z092ikZs',
                'direction' => 1,
                'form_public_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSd2knfkpV...',
                'timestamp' => '2025-07-14 21:06:30',
            ],
        ];

        DB::table('reservations_forms_changes')->insert($reservationsFormsChanges);
    }
}