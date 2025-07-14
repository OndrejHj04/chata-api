<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersGroups = [
            [
                'userId' => 1,
                'groupId' => 62,
            ],
            [
                'userId' => 1,
                'groupId' => 63,
            ],
            [
                'userId' => 206,
                'groupId' => 62,
            ],
        ];

        DB::table('users_groups')->insert($usersGroups);
    }
}