<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            [
                [
                    "url" => "avatar/01.jpg",
                    "name" => "Williams",
                    "firstname" => "Christinne",
                    "email" => "redactor@redactor",
                    "post_id" => 2,
                    // "user_id" => 3,
                    "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. ",
                    "check" => 1
                ],
                [
                    "url" => "team/3.jpg",
                    "name" => "Smith",
                    "firstname" => "Michael",
                    "email" => "membre@membre",
                    "post_id" => 2,
                    // "user_id" => 2,
                    "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. ",
                    "check" => 1
                ],
                [
                    "url" => "team/2.jpg",
                    "name" => "Smith",
                    "firstname" => "Michael",
                    "email" => "membre@membre",
                    "post_id" => 1,
                    // "user_id" => 2,
                    "comment" => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. ",
                    "check" => 1
                ]
            ]
        );
    }
}
