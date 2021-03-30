<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeAboutVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_about_videos')->insert(
            [
                [
                    "url" => "video.jpg",
                    "youtubeLink" => "https://www.youtube.com/watch?v=JgHfx2v9zOU"
                ]
            ]
        );
    }
}
