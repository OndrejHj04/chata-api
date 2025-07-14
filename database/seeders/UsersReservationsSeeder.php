<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersReservations = [
            [
                'userId' => 1,
                'reservationId' => 238,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-03-01 10:37:06',
            ],
            [
                'userId' => 1,
                'reservationId' => 239,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-03-01 11:54:37',
            ],
            [
                'userId' => 1,
                'reservationId' => 240,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-07-07 17:20:51',
            ],
            [
                'userId' => 205,
                'reservationId' => 238,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-03-01 10:37:06',
            ],
            [
                'userId' => 206,
                'reservationId' => 239,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-03-01 12:19:30',
            ],
            [
                'userId' => 206,
                'reservationId' => 240,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-07-07 17:20:51',
            ],
            [
                'userId' => 208,
                'reservationId' => 238,
                'verified' => 1,
                'outside' => 0,
                'timestamp' => '2025-03-02 17:48:37',
            ],
        ];

        DB::table('users_reservations')->insert($usersReservations);
    }
}