<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventsChildren = [
            [
                'id' => 1,
                'primary_txt' => 'Vytvoření účtu',
                'secondary_txt' => 'Uživatel dostane email s heslem a pokyny k tomu ab...',
                'template' => 9,
                'event' => 1,
                'active' => 1,
                'variables' => 'email,password',
            ],
            [
                'id' => 4,
                'primary_txt' => 'Obnova hesla',
                'secondary_txt' => 'Uživatel dostane do email s odkazem na změnu hesla...',
                'template' => 12,
                'event' => 1,
                'active' => 1,
                'variables' => 'link',
            ],
            [
                'id' => 8,
                'primary_txt' => 'Přidání do rezervace',
                'secondary_txt' => 'Uživatel dostane upozornění o tom, že byl přidán d...',
                'template' => 16,
                'event' => 3,
                'active' => 1,
                'variables' => 'reservation_name,reservation_start,reservation_end...',
            ],
            [
                'id' => 10,
                'primary_txt' => ' Potvrzení rezervace',
                'secondary_txt' => 'Vedoucí rezervace dostane upozornění o potvrzení s...',
                'template' => 18,
                'event' => 3,
                'active' => 1,
                'variables' => 'reservation_start,reservation_end,outside_link,pay...',
            ],
            [
                'id' => 11,
                'primary_txt' => ' Zamítnutí rezervace',
                'secondary_txt' => 'Vedoucí rezervace dostane potvrzení o zamítnutí sv...',
                'template' => 19,
                'event' => 3,
                'active' => 1,
                'variables' => 'reservation_start,reservation_end,reject_reason,re...',
            ],
        ];

        DB::table('events_children')->insert($eventsChildren);
    }
}