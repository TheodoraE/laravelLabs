<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tag_post')->insert(
            [
                [
                    "post_id" => 1,
                    "tag_id" => 1
                ],
                [
                    "post_id" => 1,
                    "tag_id" => 2
                ],
                [
                    "post_id" => 1,
                    "tag_id" => 3
                ],
                [
                    "post_id" => 2,
                    "tag_id" => 2
                ],
                [
                    "post_id" => 2,
                    "tag_id" => 3
                ],
            ]
        );
    }
}
