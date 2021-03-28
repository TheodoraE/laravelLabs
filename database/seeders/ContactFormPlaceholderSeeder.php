<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormPlaceholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_form_placeholders')->insert(
            [
                [
                    "placeholder" => "Your name"
                ],
                [
                    "placeholder" => "Your email"
                ],
                [
                    "placeholder" => "Subject"
                ],
                [
                    "placeholder" => "Message"
                ],
            ]
        );
    }
}
