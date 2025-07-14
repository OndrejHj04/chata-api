<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'id' => 1,
                'name' => 'archive',
                'color' => '#999999',
                'display_name' => 'Archiv',
                'icon' => 'folder_delete_icon',
            ],
            [
                'id' => 2,
                'name' => 'waiting',
                'color' => '#FCD34D',
                'display_name' => 'Čeká na potvrzení',
                'icon' => 'running_with_errors',
            ],
            [
                'id' => 3,
                'name' => 'success',
                'color' => '#34D399',
                'display_name' => 'Potvrzeno',
                'icon' => 'done_all_icon',
            ],
            [
                'id' => 4,
                'name' => 'declined',
                'color' => '#ED9191',
                'display_name' => 'Zamítnuto',
                'icon' => 'gpp_bad_icon',
            ],
            [
                'id' => 5,
                'name' => 'blocked',
                'color' => '#ED9191',
                'display_name' => 'Blokováno správcem',
                'icon' => 'do_disturb_icon',
            ],
        ];

        DB::table('status')->insert($statuses);
    }
}