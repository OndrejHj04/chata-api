<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservationsGroups = [
            [
                'reservationId' => 240,
                'groupId' => 62,
            ],
        ];

        DB::table('reservations_groups')->insert($reservationsGroups);
    }
}