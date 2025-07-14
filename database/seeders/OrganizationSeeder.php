<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [
            ['id' => 1, 'name' => 'ZO'],
            ['id' => 2, 'name' => 'Zaměstnanec'],
            ['id' => 3, 'name' => 'Veřejnost'],
        ];

        DB::table('organization')->insert($organizations);
    }
}