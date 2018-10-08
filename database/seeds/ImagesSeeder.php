<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
             "img"=> "/storage/img/ubuntu.svg",
            ],
            [
             "img"=> "/storage/img/windows.jpg",
            ],
            [
             "img"=> "/storage/img/android.png",
            ],

        ]);
    }
}
