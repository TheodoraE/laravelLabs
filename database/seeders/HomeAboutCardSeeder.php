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
                    "classIcon" => "flaticon-023-flask",
                    "title" => "Get in the lab",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-6",
                    "classIcon" => "flaticon-011-compass",
                    "title" => "Projects online",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classCol" => "col-md-4 col-sm-12",
                    "classIcon" => "flaticon-037-idea",
                    "title" => "SMART MARKETING",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
            ]
        );
    }
}
