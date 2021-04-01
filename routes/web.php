<?php

use App\Models\Logo;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormAddressController;
use App\Http\Controllers\ContactFormEmailController;
use App\Http\Controllers\ContactFormPhoneController;
use App\Http\Controllers\ContactFormPlaceholderController;
use App\Http\Controllers\ContactFormSubjectController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeAboutButtonController;
use App\Http\Controllers\HomeAboutCardController;
use App\Http\Controllers\HomeAboutContentController;
use App\Http\Controllers\HomeAboutTitleController;
use App\Http\Controllers\HomeAboutVideoController;
use App\Http\Controllers\HomeCarouselController;
use App\Http\Controllers\HomeCarouselDescriptionController;
use App\Http\Controllers\HomeServicesButtonController;
use App\Http\Controllers\HomeServicesTitleController;
use App\Http\Controllers\HomeTeamCardController;
use App\Http\Controllers\HomeTeamTitleController;
use App\Http\Controllers\HomeTestimonialsCardController;
use App\Http\Controllers\HomeTestimonialsTitleController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PageHeaderController;
use App\Http\Controllers\ServicesCardController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use App\Models\ContactFormAddress;
use App\Models\ContactFormEmail;
use App\Models\ContactFormPhone;
use App\Models\ContactFormPlaceholder;
use App\Models\ContactFormSubject;
use App\Models\ContactFormSubtitle;
use App\Models\ContactFormTitle;
use App\Models\Footer;
use App\Models\HomeAboutButton;
use App\Models\HomeAboutCard;
use App\Models\HomeAboutContent;
use App\Models\HomeAboutTitle;
use App\Models\HomeAboutVideo;
use App\Models\HomeCarousel;
use App\Models\HomeCarouselDescription;
use App\Models\HomeServicesButton;
use App\Models\HomeServicesTitle;
use App\Models\HomeTeamCard;
use App\Models\HomeTeamTitle;
use App\Models\HomeTestimonialsCard;
use App\Models\HomeTestimonialsTitle;
use App\Models\Navbar;
use App\Models\ServicesCard;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Blade Home(welcome)
Route::get('/', function () {
    // Main
    $logo = Logo::all();
    $footer = Footer::all();
    // Navbar
    $navbar = Navbar::all();
    // contactForm
    $contactFormTitle = ContactFormTitle::all();
    $contactFormSubtitle = ContactFormSubtitle::all();
    $contactFormAddress = ContactFormAddress::all();
    $contactFormPhone = ContactFormPhone::all();
    $contactFormEmail = ContactFormEmail::all();
    $contactFormPlaceholder = ContactFormPlaceholder::all();
    $contactFormSubjects = ContactFormSubject::all();
    // Home
        // Intro
    $homeCarousel = HomeCarousel::all();
    $homeCarouselDescription = HomeCarouselDescription::all();
    $homeCarouselCount = -1;
        // About
    $homeAboutCards = HomeAboutCard::all();
    $homeAboutTitle = HomeAboutTitle::all();
    $homeAboutContent = HomeAboutContent::all();
    $homeAboutButton = HomeAboutButton::all();
    $homeAboutVideo = HomeAboutVideo::all();
        // Testimonials
    $homeTestimonialsTitle = HomeTestimonialsTitle::all();
    $homeTestimonialsCards = HomeTestimonialsCard::all();
        // Services
    $homeServicesTitle = HomeServicesTitle::all();
    $homeServicesButton = HomeServicesButton::all();
    // Services
    $servicesCard = ServicesCard::all();
        // Team
    $homeTeamTitle = HomeTeamTitle::all();
    $users = User::where('check',1)->get();
    // $homeTeamCards = HomeTeamCard::all();

    return view('welcome', compact('logo', 'navbar', 'footer', 'contactFormTitle', 'contactFormSubtitle', 'contactFormAddress', 'contactFormPhone', 'contactFormEmail', 'contactFormPlaceholder', 'contactFormSubjects', 'homeCarousel', 'homeCarouselDescription', 'homeCarouselCount', 'homeAboutCards', 'homeAboutTitle', 'homeAboutContent', 'homeAboutButton', 'homeAboutVideo', 'homeTestimonialsTitle', 'homeTestimonialsCards', 'homeServicesTitle', 'homeServicesButton', 'servicesCard', 'homeTeamTitle', 'users'));
});

// Authenticate
Auth::routes();

// Blades
Route::resource('services', ServicesController::class);
Route::resource('contacts', ContactController::class);
Route::resource('blogs', BlogController::class);

// Main
Route::resource('logos', LogoController::class);
Route::resource('footers', FooterController::class);
    // Navbar
Route::resource('navbars', NavbarController::class);
    // Page Header
Route::resource('pageHeaders', PageHeaderController::class);
// Contact Form
Route::resource('contactFormAddress', ContactFormAddressController::class);
Route::resource('contactFormPhones', ContactFormPhoneController::class);
Route::resource('contactFormEmails', ContactFormEmailController::class);
Route::resource('contactFormPlaceholders', ContactFormPlaceholderController::class);
Route::resource('contactFormSubjects', ContactFormSubjectController::class);



// Valider les users
Route::get('/valider/{id}', [UserController::class, 'valider']);
// Users
Route::resource('/users', UserController::class);
// Profile
Route::get('/profile', function(){
    return view('backoffice.myProfile');
});

// Home
        // Arranger les descriptions 
Route::resource('homeCarousels', HomeCarouselController::class);
Route::resource('homeCarouselDescriptions', HomeCarouselDescriptionController::class);
    // About
Route::resource('homeAboutCards', HomeAboutCardController::class);
Route::resource('homeAboutTitle', HomeAboutTitleController::class);
Route::resource('homeAboutContent', HomeAboutContentController::class);
Route::resource('homeAboutButton', HomeAboutButtonController::class);
Route::resource('homeAboutVideo', HomeAboutVideoController::class);
    // Testimonials
Route::resource('homeTestimonialsTitle', HomeTestimonialsTitleController::class);
Route::resource('homeTestimonialsCards', HomeTestimonialsCardController::class);
    // Services
Route::resource('homeServicesTitle', HomeServicesTitleController::class);
Route::resource('homeServicesButton', HomeServicesButtonController::class);
    // Team
Route::resource('homeTeamTitle', HomeTeamTitleController::class);
// Route::resource('homeTeamCard', HomeTeamCardController::class);

// Services
Route::resource('servicesSection', ServicesCardController::class);


// Route::get('/newsletter')


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

