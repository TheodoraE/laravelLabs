<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesFeaturesCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_features_cards')->insert(
            [
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 2,
                    "title" => "Get in the lab",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 19,
                    "title" => "Projects online",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-12",
                    "icon_id" => 20,
                    "title" => "SMART MARKETING",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 37,
                    "title" => "Get in the lab",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 25,
                    "title" => "Projects online",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-12",
                    "icon_id" => 8,
                    "title" => "SMART MARKETING",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
            ]
        );
    }
}
