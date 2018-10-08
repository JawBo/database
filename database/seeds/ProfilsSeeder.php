<?php

use Illuminate\Database\Seeder;

class ProfilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profils')->insert([

            [
            "prenom"=>"Jawâd",
            "nom"=>"Bouali",
            "age"=>26,
            "adresse"=>"place minoterie 10",
           
            ],
            [            
            "prenom"=>"Seb",
            "nom"=>"Pin",
            "age"=>22,
            "adresse"=>"place minoterie 10",
           
            ],
            [
            "prenom"=>"Kiki",
            "nom"=>"AlHa",
            "age"=>20,
            "adresse"=>"place minoterie 10",
           
            ]

        ]);
    }
}
