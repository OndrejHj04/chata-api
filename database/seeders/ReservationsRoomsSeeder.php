<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservationsRooms = [
            [
                'reservationId' => 240,
                'roomId' => 5,
            ],
            [
                'reservationId' => 240,
                'roomId' => 4,
            ],
            [
                'reservationId' => 240,
                'roomId' => 3,
            ],
            [
                'reservationId' => 240,
                'roomId' => 2,
            ],
            [
                'reservationId' => 240,
                'roomId' => 1,
            ],
            [
                'reservationId' => 239,
                'roomId' => 5,
            ],
            [
                'reservationId' => 239,
                'roomId' => 4,
            ],
            [
                'reservationId' => 239,
                'roomId' => 3,
            ],
            [
                'reservationId' => 239,
                'roomId' => 2,
            ],
            [
                'reservationId' => 239,
                'roomId' => 1,
            ],
            [
                'reservationId' => 238,
                'roomId' => 5,
            ],
            [
                'reservationId' => 238,
                'roomId' => 4,
            ],
            [
                'reservationId' => 238,
                'roomId' => 3,
            ],
            [
                'reservationId' => 238,
                'roomId' => 2,
            ],
            [
                'reservationId' => 238,
                'roomId' => 1,
            ],
        ];

        DB::table('reservations_rooms')->insert($reservationsRooms);
    }
}