<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTestimonialsTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_testimonials_titles')->insert(
            [
                [
                    "title" => "What our clients say"
                ]
            ]
        );
    }
}
