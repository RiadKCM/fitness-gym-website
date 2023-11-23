<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Abonnement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('sports')->insert([
            [
                'nom_sport' => 'Musculation',
                'Description' => 'Description Musculation',
            ],
            [
                'nom_sport' => 'Boxe',
                'Description' => 'Description Boxe',
            ],
            [
                'nom_sport' => 'Cours Collectif',
                'Description' => 'Description Cours Collectif',
            ]
        ]);
    }
}
