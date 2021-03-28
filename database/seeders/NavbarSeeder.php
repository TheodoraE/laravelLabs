<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert(
            [
                [
                    "link" => "/",
                    "page" => "Home"
                ],
                [
                    "link" => "/services",
                    "page" => "Services"
                ],
                [
                    "link" => "/blogs",
                    "page" => "Blog"
                ],
                [
                    "link" => "/contacts",
                    "page" => "Contact"
                ],
            ]
        );
    }
}
