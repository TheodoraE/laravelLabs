<?php

use App\Http\Controllers\BlogCategoriesController;
use App\Models\Logo;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormAddressController;
use App\Http\Controllers\ContactFormEmailController;
use App\Http\Controllers\ContactFormPhoneController;
use App\Http\Controllers\ContactFormPlaceholderController;
use App\Http\Controllers\ContactFormSubjectController;
use App\Http\Controllers\ContactMailController;
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
use App\Http\Controllers\MailAdressController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NewsletterMailController;
use App\Http\Controllers\PageHeaderController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicesCardController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDeviceController;
use App\Http\Controllers\ServicesFeaturesButtonController;
use App\Http\Controllers\ServicesFeaturesCardController;
use App\Http\Controllers\ServicesFeaturesTitleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\BlogCategories;
use App\Models\BlogTag;
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
use App\Models\Newsletter;
use App\Models\PageHeader;
use App\Models\ServicesCard;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
    // Newsletter
    $newsletters = Newsletter::all();
    // Home
        // Intro
    $homeCarousel = HomeCarousel::all();
    $homeCarouselDescription = HomeCarouselDescription::all();
    $homeCarouselCount = -1;
        // About
    $homeAboutCards = HomeAboutCard::all();
    $aboutCards = $homeAboutCards->shuffle()->take(3);
    $homeAboutTitle = HomeAboutTitle::all();
    $titre1 = HomeAboutTitle::first();
    $titleOne = Str::of($titre1->title)->replace('(', '<span>');
    $title1 = Str::of($titleOne)->replace(')', '</span>');

    $homeAboutContent = HomeAboutContent::all();
    $homeAboutButton = HomeAboutButton::all();
    $homeAboutVideo = HomeAboutVideo::all();
        // Testimonials
    $homeTestimonialsTitle = HomeTestimonialsTitle::all();
    $homeTestimonialsCards = HomeTestimonialsCard::all();
    $testimonials = HomeTestimonialsCard::orderBy('id', 'DESC')->get()->take(6);
        // Services
    $homeServicesTitle = HomeServicesTitle::all();
    $homeServicesButton = HomeServicesButton::all();
    $titre2 = HomeServicesTitle::first();
    $titleTwo = Str::of($titre2->title)->replace('(', '<span>');
    $title2 = Str::of($titleTwo)->replace(')', '</span>');

    // Services
    $servicesCard = ServicesCard::get()->take(9);
        // Team
    $homeTeamTitle = HomeTeamTitle::all();
    $users = User::where('check',1)->get();
    $titre3 = HomeTeamTitle::first();
    $titleThree = Str::of($titre3->title)->replace('(', '<span>');
    $title3 = Str::of($titleThree)->replace(')', '</span>');

    // $homeTeamCards = HomeTeamCard::all();

    return view('welcome', compact('logo', 'navbar', 'footer', 'contactFormTitle', 'contactFormSubtitle', 'contactFormAddress', 'contactFormPhone', 'contactFormEmail', 'contactFormPlaceholder', 'contactFormSubjects', 'homeCarousel', 'homeCarouselDescription', 'homeCarouselCount', 'aboutCards', 'homeAboutTitle', 'homeAboutContent', 'homeAboutButton', 'homeAboutVideo', 'homeTestimonialsTitle', 'homeTestimonialsCards', 'testimonials', 'homeServicesTitle', 'homeServicesButton', 'servicesCard', 'homeTeamTitle', 'users', 'newsletters', 'title1', 'title2', 'title3'));
});

// Authenticate
Auth::routes();

// Blades
Route::resource('services', ServicesController::class);
Route::resource('contacts', ContactController::class);
Route::resource('blogs', BlogController::class);

// Functions
Route::resource('functions', PositionController::class);
// Roles
Route::resource('roles', RoleController::class);
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
Route::resource('servicesFeaturesTitle', ServicesFeaturesTitleController::class);
Route::resource('servicesDevices', ServicesDeviceController::class);
Route::resource('servicesFeaturesButton', ServicesFeaturesButtonController::class);
Route::resource('servicesFeaturesCards', ServicesFeaturesCardController::class);

// Blog
    // Valider les commentaires
Route::get('/validerComment/{id}', [CommentController::class, 'validerComment']);
Route::get('/validerPost/{id}', [PostController::class, 'validerPost']);
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
Route::resource('categories', BlogCategoriesController::class);
Route::resource('tags', TagController::class);

// Contact
Route::resource('contactMap', MapController::class);

Route::resource('contactMail', ContactMailController::class);
Route::resource('mailAddress', MailAdressController::class);
Route::resource('newsletter', NewsletterController::class);
Route::resource('newsletterMail', NewsletterMailController::class);


Route::get('/search', [PostController::class, 'search']);
Route::get('/filterCategory/{id}', [PostController::class, 'filterCategory']);
Route::get('/filterTag/{id}', [PostController::class, 'filterTag']);

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('isVerified');

