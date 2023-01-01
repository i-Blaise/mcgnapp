<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeDataController;
use App\Http\Controllers\MailController;
use App\Models\Event;

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/', HomeController::class);
// Route::resource('/', HomeDataController::class);
Route::get('/', [HomeDataController::class, 'index'])->name('home');
// Route::get('/home', [HomeDataController::class, 'home']);
Route::get('/blog/{id}', [HomeDataController::class, 'blogSingle'])->name('blog.single'); 
Route::get('/blog', [HomeDataController::class, 'blogPage'])->name('blog');
Route::get('/about', [HomeDataController::class, 'aboutPage'])->name('about');
Route::get('/causes', [HomeDataController::class, 'causesPage'])->name('causes');
Route::get('/causes/{id}', [HomeDataController::class, 'causesSingle'])->name('causes.single');
Route::post('/becomeVolunteer', [HomeDataController::class, 'becomeVolunteerMail'])->name('blog.becomeVolunteer');
Route::post('/donateNow', [HomeDataController::class, 'donateNow'])->name('blog.donateNow');
Route::post('/contactUsForm', [HomeDataController::class, 'contactUsForm'])->name('contactUsForm');
Route::get('/donatePage/{id?}', [HomeDataController::class, 'donatePage'])->name('donatePage');
Route::get('/eventsPage', [HomeDataController::class, 'eventsPage'])->name('eventsPage');
Route::get('/volunteerEvent/{id?}', [HomeDataController::class, 'volunteerEvent'])->name('volunteerEvent');

// Route::get('/delete-event', function () {
//     Event::truncate();

//   });

Route::get('/mail', [MailController::class, 'becomeVolunteerMail']);
