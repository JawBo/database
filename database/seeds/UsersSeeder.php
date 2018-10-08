<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
            "name"=>"Jawâd",
            "email"=>"jawad@mail.fr",
            "password"=>Hash::make('test'),
            "role_id"=>1,
            "image_id"=>1,
            "profil_id"=> 1
            ],
            [            
            "name"=>"Seb",
            "email"=>"s@mail.fr",
            "password"=>Hash::make('test'),
            "role_id"=>2,
            "image_id"=>2,
            "profil_id"=> 2
            ],
            [
            "name"=>"Kiki",
            "email"=>"k@mail.com",
            "password"=>Hash::make('test'),
            "role_id"=>3,
            "image_id"=>3,
            "profil_id"=> 3
            ]

        ]);
    }
}
