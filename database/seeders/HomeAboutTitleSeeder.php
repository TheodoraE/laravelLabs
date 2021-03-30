<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeAboutTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_about_titles')->insert(
            [
                [
                    "title" => "Get in the Lab and discover the world",
                ]
            ]
        );
    }
}
