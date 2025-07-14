<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'id' => 62,
                'name' => 'test marinx',
                'owner' => 1,
                'description' => 'mairn',
            ],
            [
                'id' => 63,
                'name' => 'test 222',
                'owner' => 1,
                'description' => 'tstadff',
            ],
        ];

        DB::table('groups')->insert($groups);
    }
}