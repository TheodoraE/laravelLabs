<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert(
            [
                [
                    "category" => "Vestibulum maximus"
                ],
                [
                    "category" => "Nisi eu lobortis pharetra"
                ],
                [
                    "category" => "Orci quam accumsan"
                ],
                [
                    "category" => "Auguen pharetra massa"
                ],
                [
                    "category" => "Tellus ut nulla"
                ],
                [
                    "category" => "Etiam egestas viverra"
                ],
            ]
        );
    }
}
