<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeAboutCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_about_cards')->insert(
            [
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 23,
                    "title" => "Get in the lab",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 11,
                    "title" => "Projects online",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-12",
                    "icon_id" => 37,
                    "title" => "SMART MARKETING",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 2,
                    "title" => "GDiscovering",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "icon_id" => 19,
                    "title" => "Working together",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-12",
                    "icon_id" => 20,
                    "title" => "HELLO YOU",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
            ]
        );
    }
}
