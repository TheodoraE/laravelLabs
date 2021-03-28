<?php

use App\Models\Logo;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
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

    return view('welcome', compact('logo', 'navbar', 'footer', 'contactFormTitle', 'contactFormSubtitle', 'contactFormAddress', 'contactFormPhone', 'contactFormEmail', 'contactFormPlaceholder', 'contactFormSubjects', 'homeCarousel', 'homeCarouselCount', 'homeCarouselDescription'));
});

Auth::routes();


// Route::get('/services', function (){
//     return view('pages.services');
// });
// Route::get('/contacts', function (){
//     return view('pages.contact');
// });
// Route::get('/blogs', function (){
//     return view('pages.blog');
// });

Route::resource('services', ServicesController::class);
Route::resource('contacts', ContactController::class);
Route::resource('blogs', BlogController::class);

// Route::get('/newsletter')


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

