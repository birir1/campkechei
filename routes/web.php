<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TrainingCampRegistrationController;

use App\Http\Controllers\RegistrationController;

// routes/web.php

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// routes/web.php
// routes/web.php

use App\Http\Controllers\SubscriberController;

// This route will handle POST requests to /subscribe
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');



Route::get('/registration', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/registration', [RegistrationController::class, 'submitForm'])->name('registration.submit');
Route::get('/registration/success', [RegistrationController::class, 'success'])->name('registration.success');


// Route::get('/', [PagesController::class, 'index'])->name('index');
// Route::get('/register', [PagesController::class, 'register'])->name('register');

// Route::get('/register', [TrainingCampRegistrationController::class, 'showForm']);
// Route::post('/register', [TrainingCampRegistrationController::class, 'store']);

// routes/web.php

use App\Http\Controllers\CampRegistrationController;

Route::post('/camp/register', [CampRegistrationController::class, 'register'])->name('camp.register');



Route::get('/packages', function () {
    return view('frontend.packages');
});

Route::get('/registered', function () {
    return view('frontend.registered');
});

Route::get('/video', function () {
    return view('frontend.video');
});

Route::get('/community', function () {
    return view('frontend.community');
});

Route::get('/accomodation', function () {
    return view('frontend.accomodation');
});

Route::get('/amenities', function () {
    return view('frontend.amenities');
});

Route::get('/contacts', function () {
    return view('frontend.contacts');
});

Route::get('/facilities', function () {
    return view('frontend.facilities');
});

Route::get('/endurance', function () {
    return view('frontend.endurance');
});

Route::get('/ourcoaches', function () {
    return view('frontend.ourcoaches');
});

Route::get('/events', function () {
    return view('frontend.events');
});

Route::get('/FAQs', function () {
    return view('frontend.FAQs');
});

Route::get('/flexibility', function () {
    return view('frontend.flexibility');
});

Route::get('/history', function () {
    return view('frontend.history');
});

Route::get('/ourathletes', function () {
    return view('frontend.ourathletes');
});

Route::get('/profiles', function () {
    return view('frontend.profiles');
});

Route::get('/rooms', function () {
    return view('frontend.rooms');
});

Route::get('/strength', function () {
    return view('frontend.strength');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/elitecamp', function () {
    return view('frontend.elitecamp');
});

Route::get('/juniorcamp', function () {
    return view('frontend.juniorcamp');
});

Route::get('/adultcamp', function () {
    return view('frontend.adultcamp');
});

Route::get('/training', function () {
    return view('frontend.training');
});

Route::get('/campsoverview', function () {
    return view('frontend.campsoverview');
});

Route::get('/trainingresources', function () {
    return view('frontend.trainingresources');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('frontend.index');
});