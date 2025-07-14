<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'id' => 1,
                'people' => 4,
                'name' => 'first_room',
            ],
            [
                'id' => 2,
                'people' => 4,
                'name' => 'second_room',
            ],
            [
                'id' => 3,
                'people' => 4,
                'name' => 'third_room',
            ],
            [
                'id' => 4,
                'people' => 4,
                'name' => 'fourth_room',
            ],
            [
                'id' => 5,
                'people' => 6,
                'name' => 'fifth_room',
            ],
        ];

        DB::table('rooms')->insert($rooms);
    }
}