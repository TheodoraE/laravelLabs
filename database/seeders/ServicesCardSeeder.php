<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_cards')->insert(
            [
                [
                    "icon_id" => 23,
                    "title" => "Get in the lab",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 11,
                    "title" => "Projects online",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 26,
                    "title" => "SMART MARKETING",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 27,
                    "title" => "Social Media",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 28,
                    "title" => "Brainstorming",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 29,
                    "title" => "Documented",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 18,
                    "title" => "Responsive",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 30,
                    "title" => "Retina ready",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "icon_id" => 12,
                    "title" => "Ultra modern",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
            ]
        );
    }
}
