<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeAboutButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_about_buttons')->insert(
            [
                [
                    "button" => "Browse",
                    "link" => "#team-section"
                ]
            ]
        );
    }
}
