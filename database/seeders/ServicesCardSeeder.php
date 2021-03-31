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
                    "classIcon" => "flaticon-023-flask",
                    "title" => "Get in the lab",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-011-compass",
                    "title" => "Projects online",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-037-idea",
                    "title" => "SMART MARKETING",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-039-vector",
                    "title" => "Social Media",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-036-brainstorming",
                    "title" => "Brainstorming",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-026-search",
                    "title" => "Documented",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-018-laptop-1",
                    "title" => "Responsive",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-043-sketch",
                    "title" => "Retina ready",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
                [
                    "classIcon" => "flaticon-012-cube",
                    "title" => "Ultra modern",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
                ],
            ]
        );
    }
}
