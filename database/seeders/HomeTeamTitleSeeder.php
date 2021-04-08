<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTeamTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_team_titles')->insert(
            [
                [
                    "title" => "Get in (the Lab) and  meet the team"
                ]
            ]
        );
    }
}
