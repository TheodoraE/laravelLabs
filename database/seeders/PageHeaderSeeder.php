<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_headers')->insert(
            [
                [
                    "home" => "Home",
                    "homeLink" => "/",
                    "page" => "Services",
                ],
                [
                    "home" => "Home",
                    "homeLink" => "/",
                    "page" => "Blog",
                ],
                [
                    "home" => "Home",
                    "homeLink" => "/",
                    "page" => "Contact",
                ],
            ]
        );
    }
}
