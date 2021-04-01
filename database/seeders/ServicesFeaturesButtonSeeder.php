<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesFeaturesButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_features_buttons')->insert(
            [
                [
                    "button" => "Browse",
                    "link" => "#services-card-section"
                ]
            ]
        );
    }
}
