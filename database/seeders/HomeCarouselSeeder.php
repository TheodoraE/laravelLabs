<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_carousels')->insert(
            [
                [
                    "url" => '01.jpg',
                    "description_id" => 1
                ],
                [
                    "url" => '02.jpg',
                    "description_id" => 2
                ],
                [
                    "url" => '01.jpg',
                    "description_id" => 3
                ],
                [
                    "url" => '02.jpg',
                    "description_id" => 4
                ],
            ]
        );
    }
}
