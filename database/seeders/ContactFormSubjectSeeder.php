<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_form_subjects')->insert(
            [
                [
                    "subject" => "Demande d'information"
                ],
                [
                    "subject" => "Mon témoignage"
                ],
                [
                    "subject" => "Autre..."
                ],
            ]
        );
    }
}
