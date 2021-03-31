<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTeamCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_team_cards')->insert(
            [
                [
                    "url" => "team/1.jpg",
                    "name" => "Christinne Williams",
                    "function" => "Project Manager"
                ],
                [
                    "url" => "team/2.jpg",
                    "name" => "Christinne Williams",
                    "function" => "CEO"
                ],
                [
                    "url" => "team/3.jpg",
                    "name" => "Christinne Williams",
                    "function" => "Digital designer"
                ]
            ]
        );
    }
}
