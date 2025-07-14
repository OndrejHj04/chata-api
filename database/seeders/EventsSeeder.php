<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'id' => 1,
                'name' => 'Uživatelé',
            ],
            [
                'id' => 3,
                'name' => 'Rezervace',
            ],
        ];

        DB::table('events')->insert($events);
    }
}