<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesFeaturesTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_features_titles')->insert(
            [
                [
                    "title" => "Get in the Lab and discover (the world)"
                ]
            ]
        );
    }
}
