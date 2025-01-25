<?php

use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('backend/base_dashboard');
//});

Route::get('/', function () {
    return view('backend/index_dashboard');
})->name('dashboard');

Route::get('intake/form', function () {
    return view('backend/intake-form');
})->name('intake.form');

Route::post('intake/form/insert', [ContentController::class , 'intakeInsert' ]  )->name('intake.insert');

Route::get('intake/form/test', function () {
    return view('backend/test');
})->name('test.form');


Route::get('intake/thank-you', function () {
    return view('backend/thank');
})->name('thank.you');


Route::post('contact-us/mail/send', [ContentController::class, 'sendMail'])->name('contact.mail');


Route::get('mail', function () {
    return view('backend/mail');
})->name('mail.view');
