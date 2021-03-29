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
use App\Http\Controllers\HomeCarouselController;
use App\Http\Controllers\HomeCarouselDescriptionController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PageHeaderController;
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
use App\Models\HomeCarousel;
use App\Models\HomeCarouselDescription;
use App\Models\Navbar;
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
    $homeCarousel = HomeCarousel::all();
    $homeCarouselDescription = HomeCarouselDescription::all();
    $homeCarouselCount = 0;

    return view('welcome', compact('logo', 'navbar', 'footer', 'contactFormTitle', 'contactFormSubtitle', 'contactFormAddress', 'contactFormPhone', 'contactFormEmail', 'contactFormPlaceholder', 'contactFormSubjects', 'homeCarousel', 'homeCarouselDescription', 'homeCarouselCount'));
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

// Users
Route::resource('/users', UserController::class);
// Profile


// Home
        // Arranger les descriptions 
Route::resource('homeCarousels', HomeCarouselController::class);
Route::resource('homeCarouselDescriptions', HomeCarouselDescriptionController::class);
// Route::resource('homeAboutCards', H)


// Route::get('/newsletter')


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

