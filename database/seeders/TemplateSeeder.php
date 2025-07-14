<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'id' => 9,
                'name' => 'Uvítací email do aplikace',
                'title' => 'Vytvoření účtu v aplikaci chata.gjkt.cz',
                'text' => '<p>Ahoj.</p>
<p>Byl ti vytvořen &uacute;čet v apli...',
            ],
            [
                'id' => 12,
                'name' => 'Reset hesla',
                'title' => 'Resetování hesla',
                'text' => 'Odkaz na restartování hesla ${link}',
            ],
            [
                'id' => 16,
                'name' => 'Přidání uživatele do rezervace',
                'title' => 'Pobyt na Chatě GJKT',
                'text' => '<p>V&aacute;&scaron; &uacute;čet byl přid&aacute;n...',
            ],
            [
                'id' => 18,
                'name' => 'Potvrzení rezervace (změna statusu rezervace na "P...',
                'title' => 'Potvrzení rezervace',
                'text' => '<p>Byla potvrzena Va&scaron;e rezervace ${reservat...',
            ],
            [
                'id' => 19,
                'name' => 'Zamítnutí rezervace (změna statusu rezervace na "Z...',
                'title' => 'Zamítnutí rezervace',
                'text' => '<p>Va&scaron;e rezervace ${reservation_name} byla ...',
            ],
        ];

        DB::table('templates')->insert($templates);
    }
}