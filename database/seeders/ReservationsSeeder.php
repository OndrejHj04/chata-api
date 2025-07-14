<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservations = [
            [
                'id' => 240,
                'from_date' => '2025-07-07',
                'to_date' => '2025-07-08',
                'name' => 'NOVÁ REZERVACE',
                'purpouse' => 'TEST',
                'leader' => 1,
                'instructions' => 'hovno',
                'status' => 2,
                'creation_date' => '2025-07-07 17:20:51',
                'success_link' => NULL,
                'payment_symbol' => NULL,
                'reject_reason' => NULL,
            ],
            [
                'id' => 238,
                'from_date' => '2025-03-01',
                'to_date' => '2025-03-02',
                'name' => 'test',
                'purpouse' => 'test',
                'leader' => 1,
                'instructions' => '',
                'status' => 3,
                'creation_date' => '2025-03-01 10:37:06',
                'success_link' => NULL,
                'payment_symbol' => '01032',
                'reject_reason' => NULL,
            ],
            [
                'id' => 239,
                'from_date' => '2025-03-03',
                'to_date' => '2025-03-08',
                'name' => 'test',
                'purpouse' => 'test',
                'leader' => 1,
                'instructions' => '',
                'status' => 3,
                'creation_date' => '2025-03-01 11:54:37',
                'success_link' => NULL,
                'payment_symbol' => '0308onYT',
                'reject_reason' => NULL,
            ],
        ];

        DB::table('reservations')->insert($reservations);
    }
}