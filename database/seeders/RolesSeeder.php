<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'admin',
            ],
            [
                'id' => 2,
                'name' => 'správce',
            ],
            [
                'id' => 3,
                'name' => 'uživatel',
            ],
            [
                'id' => 4,
                'name' => 'veřejnost',
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}