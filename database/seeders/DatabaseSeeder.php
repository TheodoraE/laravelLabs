<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LogoSeeder::class,
            NavbarSeeder::class,
            FooterSeeder::class,
            PageHeaderSeeder::class,
            ContactFormTitleSeeder::class,
            ContactFormSubtitleSeeder::class,
            ContactFormAddressSeeder::class,
            ContactFormPhoneSeeder::class,
            ContactFormEmailSeeder::class,
            ContactFormPlaceholderSeeder::class,
            ContactFormSubjectSeeder::class,
            HomeCarouselDescriptionSeeder::class,
            HomeCarouselSeeder::class,
            IconSeeder::class,
            HomeAboutCardSeeder::class,
            HomeAboutTitleSeeder::class,
            HomeAboutContentSeeder::class,
            HomeAboutButtonSeeder::class,
            HomeAboutVideoSeeder::class,
            HomeTestimonialsTitleSeeder::class,
            HomeTestimonialsCardSeeder::class,
            HomeServicesTitleSeeder::class,
            HomeServicesButtonSeeder::class,

            ServicesCardSeeder::class,

            
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
