<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    "name" => "Williams",
                    "firstname" => "Christinne",
                    "function_id" => 1,
                    "role_id" => 1,
                    "description" => "Hello",
                    "email" => "admin@admin",
                    "password" => Hash::make('admin@admin'),
                    "url" => "team/1.jpg",
                    "check" => 1,
                ],
                [
                    "name" => "Williams",
                    "firstname" => "Christinne",
                    "function_id" => 2,
                    "role_id" => 2,
                    "description" => "こんにちは",
                    "email" => "webMaster@webMaster",
                    "password" => Hash::make('webMaster@webMaster'),
                    "url" => "team/2.jpg",
                    "check" => 1,
                ],
                [
                    "name" => "Williams",
                    "firstname" => "Christinne",
                    "function_id" => 3,
                    "role_id" => 3,
                    "description" => "Ola",
                    "email" => "redactor@redactor",
                    "password" => Hash::make('redactor@redactor'),
                    "url" => "team/3.jpg",
                    "check" => 1,
                ],
                [
                    "name" => "Smith",
                    "firstname" => "Michael",
                    "function_id" => 2,
                    "role_id" => 4,
                    "description" => "Je suis membre de la société",
                    "email" => "membre@membre",
                    "password" => Hash::make('membre@membre'),
                    "url" => "avatar/01.jpg",
                    "check" => 0,
                ],
            ]
        );
    }
}
