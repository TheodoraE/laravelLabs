<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_form_addresses')->insert(
            [
                [
                    "address1" => "C/ Libertad, 34",
                    "address2" => "05200 Arévalo"
                ]
            ]
        );
    }
}
