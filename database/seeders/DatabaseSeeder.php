<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Abonnement;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('sports')->insert([
        //     [
        //         'nom_sport' => 'Musculation',
        //         'Description' => 'Description Musculation',
        //     ],
        //     [
        //         'nom_sport' => 'Boxe',
        //         'Description' => 'Description Boxe',
        //     ],
        //     [
        //         'nom_sport' => 'Cours Collectif',
        //         'Description' => 'Description Cours Collectif',
        //     ]
        // ]);


        // DB::table('abonnements')->insert([
        //     [
        //         'type_abonnements' => 'Solo',
        //         'prix'=> '30',
        //         'Description' => 'Description de l abonnement Solo',
        //         'duree_validite' => '1',
        //     ],
        //     [
        //         'type_abonnements' => 'Duo',
        //         'prix'=> '40',
        //         'Description' => 'Description de l abonnement Duo',
        //         'duree_validite' => '1',
        //     ],
        //     [
        //         'type_abonnements' => 'Boxe',
        //         'prix'=> '35',
        //         'Description' => 'Description de l abonnement Boxe',
        //         'duree_validite' => '1',
        //     ]
        // ]);
        User::factory(10)->create();
    }
}
