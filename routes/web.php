<?php

use App\Http\Controllers\Admin\AdminAboutUsController;
use App\Http\Controllers\Admin\AdminCausesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeDataController;
use App\Http\Controllers\Admin\AdminHeaderController;
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


// Route::middleware(['auth'])->group(function () {
//   Route::view('/home', 'home.index')->name('home');
// });
// Route::prefix('admin')->group(function () {
  // Route::get('/', [AdminAuthController::class, 'index'])->name('home');
  // Route::get('/home', [AdminHomeController::class, 'indexPage'])->name('admin.home');
  // Route::post('/upload-home-header', [AdminHomeController::class, 'uploadHomeHeader'])->name('home.UploadHeader');
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
//     Route::view('/home', 'admin.pages.home.index')->name('home');
//     Route::post('/upload-home-header', [AdminHomeController::class, 'uploadHomeHeader'])->name('home.UploadHeader');
//     });

    Route::middleware(['auth'])->group(function () {
      Route::get('/admin', [AdminHeaderController::class, 'indexPage'])->name('admin.home');
      
      Route::prefix('admin')->group(function () {
      // Route::view('home', 'admin.pages.home.index')->name('home');
      // HEADER 
      Route::get('/home', [AdminHeaderController::class, 'indexPage'])->name('admin.home');
      Route::post('/upload-home-header', [AdminHeaderController::class, 'uploadHomeHeader'])->name('home.UploadHeader');
      Route::post('/delete-home-header', [AdminHeaderController::class, 'deleteHomeHeader'])->name('home.DeleteHeader');

      Route::get('/other-pages', [AdminHeaderController::class, 'uploadOtherPagesHeader'])->name('uploadOtherPagesHeader');
      Route::get('/other-pages-single/{page}/', [AdminHeaderController::class, 'singleHeaderUpdatePage'])->name('singleHeaderUpdatePage');
      Route::post('/save-header-update', [AdminHeaderController::class, 'updateSinglePageHeader'])->name('saveSinglePageHeader');


      // ABOUT US 
      Route::get('/aboutus-about', [AdminAboutUsController::class, 'aboutPage'])->name('aboutus.About');
      Route::post('/aboutus-about-update-desc-img', [AdminAboutUsController::class, 'updateAboutDescImage'])->name('aboutus.UpdateDescImg');
      Route::post('/about-mission-vision', [AdminAboutUsController::class, 'updateAboutMissionVision'])->name('aboutus.UpdateAdboutDesc');


      Route::get('/aboutus-meet-team', [AdminAboutUsController::class, 'meetTeamPage'])->name('aboutus.meetTeam');
      Route::post('/aboutus-upload-team', [AdminAboutUsController::class, 'uploadTeam'])->name('aboutus.uploadTeam');
      Route::post('/aboutus-delete-team', [AdminAboutUsController::class, 'deleteTeam'])->name('aboutus.deleteTeam');


      Route::get('/aboutus-testimonials', [AdminAboutUsController::class, 'testimonialPage'])->name('aboutus.testimonial');
      Route::post('/aboutus-upload-testimonial', [AdminAboutUsController::class, 'uploadTestimonial'])->name('aboutus.UploadTestimonial');
      Route::post('/aboutus-delete-testimonial', [AdminAboutUsController::class, 'deleteTestimonial'])->name('aboutus.DeleteTestimonial');


      // CAUSES 
      Route::get('/add-cause', [AdminCausesController::class, 'addCause'])->name('causes.addCause');
      Route::post('/create-cause', [AdminCausesController::class, 'createCause'])->name('causes.createCause');


      Route::get('/cause-list', [AdminCausesController::class, 'causeList'])->name('causes.list');
      Route::get('/cause-update-page/{id}', [AdminCausesController::class, 'updatePage'])->name('causes.updatePage');
      Route::post('/cause-edit-single-cause', [AdminCausesController::class, 'editCause'])->name('causes.edit');

  });
});


// Route::get('/donate-latest-cause', function () {
//   $data = Causes::orderBy('created_at', 'desc')->first();

//   return route('donatePage', ['id' => $data->id]);
// //  return view('donate.index', ['id' => $data->id]);
//   // view('donate.index')
// })->name('donate-latest-cause');

Route::get('/delete-team', function () {
    Team::truncate();
    return 'done';

    // return Carbon::now();

  });

Route::get('/mail', [MailController::class, 'becomeVolunteerMail']);
