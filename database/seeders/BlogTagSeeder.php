<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tags')->insert(
            [
                [
                    "tag" => "branding"
                ],
                [
                    "tag" => "identity"
                ],
                [
                    "tag" => "video"
                ],
                [
                    "tag" => "design"
                ],
                [
                    "tag" => "inspiration"
                ],
                [
                    "tag" => "web design"
                ],
                [
                    "tag" => "photography"
                ],
            ]
        );
    }
}
