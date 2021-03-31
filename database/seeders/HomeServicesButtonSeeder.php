<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeServicesButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_services_buttons')->insert(
            [
                [
                    "button" => "Browse",
                    "link" => "/services"
                ]
            ]
        );
    }
}
