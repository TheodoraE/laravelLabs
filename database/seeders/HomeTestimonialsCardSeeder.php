<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTestimonialsCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_testimonials_cards')->insert(
            [
                [
                    "span" => "‘​‌‘",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "url" => "avatar/01.jpg",
                    "name" => "Michael Smith",
                    "function" => "CEO Company"
                ],
                [
                    "span" => "‘​‌‘",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "url" => "avatar/01.jpg",
                    "name" => "Michael Smith",
                    "function" => "CEO Company"
                ],
                [
                    "span" => "‘​‌‘",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "url" => "avatar/01.jpg",
                    "name" => "Michael Smith",
                    "function" => "CEO Company"
                ],
                [
                    "span" => "‘​‌‘",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "url" => "avatar/01.jpg",
                    "name" => "Michael Smith",
                    "function" => "CEO Company"
                ],
                [
                    "span" => "‘​‌‘",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "url" => "avatar/01.jpg",
                    "name" => "Michael Smith",
                    "function" => "CEO Company"
                ],
                [
                    "span" => "‘​‌‘",
                    "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                    "url" => "avatar/01.jpg",
                    "name" => "Michael Smith",
                    "function" => "CEO Company"
                ],
            ]
        );
    }
}