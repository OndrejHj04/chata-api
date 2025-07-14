<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'first_name' => 'Ondřej',
                'last_name' => 'Hájek',
                'role' => 1,
                'password' => '8a82884588522b953253dd58405b5b72',
                'email' => 'ondrej.hajek.profi@gmail.com',
                'image' => 'https://lh3.googleusercontent.com/a/ACg8ocKykjDWRG...',
                'verified' => 1,
                'adress' => 'test',
                'birth_date' => '2024-11-03',
                'ID_code' => NULL,
                'theme' => 1,
                'organization' => 1,
                'children' => 0,
            ],
            [
                'id' => 205,
                'first_name' => 'te',
                'last_name' => 'st',
                'role' => 4,
                'password' => NULL,
                'email' => 'ondrej.hajek.profi@gmail.com',
                'image' => NULL,
                'verified' => 1,
                'adress' => 'test',
                'birth_date' => '2025-03-01',
                'ID_code' => NULL,
                'theme' => 1,
                'organization' => NULL,
                'children' => 1,
            ],
            [
                'id' => 206,
                'first_name' => 'Marin',
                'last_name' => 'Hlína',
                'role' => 3,
                'password' => '2063aa227944303c5052dcde7e5127a5',
                'email' => 'marin.hlina@seznam.cz',
                'image' => NULL,
                'verified' => 0,
                'adress' => NULL,
                'birth_date' => NULL,
                'ID_code' => NULL,
                'theme' => 1,
                'organization' => NULL,
                'children' => 0,
            ],
            [
                'id' => 208,
                'first_name' => 'adfas',
                'last_name' => 'asfddas',
                'role' => 4,
                'password' => NULL,
                'email' => 'ondrej.hajek.profi@gmail.com',
                'image' => NULL,
                'verified' => 1,
                'adress' => 'test',
                'birth_date' => '2025-03-06',
                'ID_code' => NULL,
                'theme' => 1,
                'organization' => NULL,
                'children' => 1,
            ],
            [
                'id' => 210,
                'first_name' => 'Marin',
                'last_name' => 'Hlinx',
                'role' => 3,
                'password' => '53165aa75610938f3ca627ee1ccac4b5',
                'email' => 'marin.hlin@seznam.cz',
                'image' => NULL,
                'verified' => 0,
                'adress' => NULL,
                'birth_date' => NULL,
                'ID_code' => NULL,
                'theme' => 1,
                'organization' => NULL,
                'children' => 0,
            ],
            [
                'id' => 211,
                'first_name' => 'asfd',
                'last_name' => 'test',
                'role' => 3,
                'password' => '08b3d0e5f9cd7e70fa7cccfa7c83207a',
                'email' => 'houska.dev@gmail.comv',
                'image' => NULL,
                'verified' => 0,
                'adress' => NULL,
                'birth_date' => NULL,
                'ID_code' => NULL,
                'theme' => 1,
                'organization' => NULL,
                'children' => 0,
            ],
        ];

        DB::table('users')->insert($users);
    }
}