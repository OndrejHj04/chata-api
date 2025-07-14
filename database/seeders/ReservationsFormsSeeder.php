<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservationsForms = [
            [
                'form_id' => '1TjdjhSBsGxhqTIOH0U1Slm0_D-G48eNBb18Z092ikZs',
                'form_public_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSd2knfkpV...',
                'reservation_id' => 240,
                'user_id' => 1,
                'timestamp' => '2025-07-14 21:02:37',
            ],
        ];

        DB::table('reservations_forms')->insert($reservationsForms);
    }
}