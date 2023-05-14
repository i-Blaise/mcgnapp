<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeDataController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\MailController;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\Causes;
use App\Models\Event;
use App\Models\Home;
use App\Models\Team;
use App\Models\Volunteers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
Route::post('/becomeVolunteer', [HomeDataController::class, 'becomeVolunteer'])->name('blog.becomeVolunteer');
Route::post('/donateNow', [HomeDataController::class, 'donateNow'])->name('blog.donateNow');
Route::post('/contactUsForm', [HomeDataController::class, 'contactUsForm'])->name('contactUsForm');
Route::get('/donatePage/{id?}', [HomeDataController::class, 'donatePage'])->name('donatePage');
Route::get('/eventsPage/{is_over?}', [HomeDataController::class, 'eventsPage'])->name('eventsPage');
Route::get('/volunteerEvent/{id?}', [HomeDataController::class, 'volunteerEvent'])->name('volunteerEvent');
Route::get('/contact', [HomeDataController::class, 'contactPage'])->name('contactPage');
Route::get('/gallery', [HomeDataController::class, 'galleryPage'])->name('galleryPage');
Route::get('/donate-latest-cause', [HomeDataController::class, 'donateLatestCause'])->name('donate-latest-cause');
Route::get('/latest-blog', [HomeDataController::class, 'latestBlog'])->name('latest-blog');
Route::post('/newsletter', [HomeDataController::class, 'newsLetterSubscription'])->name('newsletter-subs');




// Route::get('admin/home', [AdminHomeController::class, 'indexPage'])->name('home');

// Route::domain('admin.' . env('APP_URL'))->group(function () {
// //   Route::get('/', function () {
// //     return 'Second subdomain landing page';
// // });
//   // Route::get('/', [AdminHomeController::class, 'indexPage'])->name('home');
// });


// Route::get('/login', [AdminAuthController::class, 'index'])->name('login');
// Route::post('/post-login', [AdminAuthController::class, 'postLogin'])->name('post.login');

Route::prefix('admin')->group(function () {
  // Route::get('/', [AdminAuthController::class, 'index'])->name('home');
  Route::get('/home', [AdminHomeController::class, 'indexPage'])->name('admin.home');
  Route::post('/upload-home-header', [AdminHomeController::class, 'uploadHomeHeader'])->name('home.UploadHeader');
});


// Route::get('/donate-latest-cause', function () {
//   $data = Causes::orderBy('created_at', 'desc')->first();

//   return route('donatePage', ['id' => $data->id]);
// //  return view('donate.index', ['id' => $data->id]);
//   // view('donate.index')
// })->name('donate-latest-cause');

Route::get('/delete-home', function () {
    Home::truncate();
    return 'done';

    // return Carbon::now();

  });

Route::get('/mail', [MailController::class, 'becomeVolunteerMail']);
