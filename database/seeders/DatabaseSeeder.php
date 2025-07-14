<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SettingsSeeder::class,
            OrganizationSeeder::class,
            RolesSeeder::class,
            StatusSeeder::class,
            RoomsSeeder::class,
            TemplateSeeder::class,
            EventsSeeder::class,
            EventsChildrenSeeder::class,
            UsersSeeder::class,
            GroupsSeeder::class,
            ReservationsSeeder::class,
            UsersReservationsSeeder::class,
            UsersGroupsSeeder::class,
            ReservationsRoomsSeeder::class,
            ReservationsGroupsSeeder::class,
            ReservationsFormsSeeder::class,
            ReservationsFormsChangesSeeder::class,
        ]);
    }
}
