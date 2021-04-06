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
            PositionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            IconSeeder::class,
            LogoSeeder::class,
            NewsletterSeeder::class,
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
            HomeAboutCardSeeder::class,
            HomeAboutTitleSeeder::class,
            HomeAboutContentSeeder::class,
            HomeAboutButtonSeeder::class,
            HomeAboutVideoSeeder::class,
            HomeTestimonialsTitleSeeder::class,
            HomeTestimonialsCardSeeder::class,
            HomeServicesTitleSeeder::class,
            HomeServicesButtonSeeder::class,
            HomeTeamTitleSeeder::class,

            ServicesCardSeeder::class,
            ServicesFeaturesTitleSeeder::class,
            ServicesFeaturesCardSeeder::class,
            ServicesDeviceSeeder::class,
            ServicesFeaturesButtonSeeder::class,
            
            BlogCategoriesSeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            PostTagSeeder::class,
            CommentSeeder::class,

            MapSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
