<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeServicesTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_services_titles')->insert(
            [
                [
                    "title" => "Get in the Lab and see the services"
                ]
            ]
        );
    }
}
