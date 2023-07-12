<?php

use Illuminate\Support\Facades\Auth;
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
//    return view('home');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adicom-academy', [App\Http\Controllers\ADICOMController::class, 'academie'])->name('adicom.academie');
Route::get('/adicom-awards', [App\Http\Controllers\ADICOMController::class, 'awards'])->name('adicom.awards');
Route::get('/adicom-forum', [App\Http\Controllers\ADICOMController::class, 'forum'])->name('adicom.forum');
Route::get('/adicom-4-good', [App\Http\Controllers\ADICOMController::class, 'good'])->name('adicom.good');
Route::get('/adicom-watch', [App\Http\Controllers\ADICOMController::class, 'watch'])->name('adicom.watch');
Route::get('/faq', [App\Http\Controllers\FAQController::class, 'index'])->name('faq.index');
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/medias', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index');
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
Route::get('/editions', [App\Http\Controllers\EditionController::class, 'index'])->name('edition.index');
