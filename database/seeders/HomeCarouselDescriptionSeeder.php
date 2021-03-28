<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarouselDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_carousel_descriptions')->insert(
            [
                [
                    "description" => "1 Get your freebie template now!"
                ],
                [
                    "description" => "2 Get your freebie template now!"
                ],
                [
                    "description" => "3 Get your freebie template now!"
                ],
                [
                    "description" => "4 Get your freebie template now!"
                ]
            ]
        );
    }
}
