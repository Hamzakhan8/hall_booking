<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\hall\ChatController;
use App\Http\Controllers\hall\HallCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HallDetailsController;
use App\Http\Controllers\SearchResultController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ReviewsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\hall\HallTypeController;
use App\Http\Controllers\admin\SliderImgController;
use App\Http\Controllers\hall\ManageUserController;
use App\Http\Controllers\admin\ManageHallController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\ManageCoupleController;
use App\Http\Controllers\customer\BookedHallController;
use App\Http\Controllers\admin\BookingController as AdminBookingController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\customer\ProfileController as CustomerProfileController;
use App\Http\Controllers\customer\TransactionController as CustomerTransactionController;
use App\Http\Controllers\hall\HallsController;

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




Route::get('/', function() {
    return view('front_view.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('auth')->group(function (){
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('register', [RegisterController::class, 'validator'])
    ->name('auth.register');
    Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');
});



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard', fn () => view('admin.dashboard'))
    ->name('admin.dashboard');

    Route::controller(ProfileController::class)->group(function() {

        Route::get('profile', 'index')->name('admin.profile');
        Route::put('update_profile', 'update')->name('admin.profile.update');
        Route::put('update_password', 'pass_update')->name('admin.password.update');
    });

    Route::get('manage_user', [ManageCoupleController::class, 'index'])
    ->name('admin.manage.user');
    Route::get('delete_user/{id}', [ManageCoupleController::class, 'destroy'])
    ->name('admin.delete.user');
    Route::get('manage_hall', [ManageHallController::class, 'index'])
    ->name('admin.manage.hall');
    Route::get('delete_hall/{id}', [ManageHallController::class, 'destroy'])
    ->name('admin.delete.hall');
    Route::get('transaction', [TransactionController::class, 'index'])
    ->name('admin.transaction');
    Route::get('reviews', [ReviewsController::class, 'index'])
    ->name('admin.reviews');
    Route::get('comment', [CommentController::class, 'index'])
    ->name('admin.comment');
    Route::get('booking', [AdminBookingController::class, 'index'])
    ->name('admin.booking');
    Route::get('contact', [AdminContactController::class, 'index'])
    ->name('admin.contact');
    Route::get('slider_img', [SliderImgController::class, 'index'])
    ->name('admin.slider.img');
    Route::post('store_slider_img', [SliderImgController::class, 'store'])
    ->name('admin.slider.store');
});


// grouped routes for hall
Route::prefix('hall')->middleware(['auth', 'hall'])->group(function () {

    //Hallcategory
    Route::resource('/hallcategory',HallCategoryController::class);

    Route::resource('/halltype', HallTypeController::class);
    //Hall
    Route::resource('/Halls',HallsController::class);


    // Delete Image
    Route::get('halltypeimage/delete/{id}',[HallTypeController::class,'destroy_image']);
    // Route::resource('/customer',CustomerController::class);
    Route::resource('/Manage-user',ManageUserController::class);
    //booking controller
    Route::get('booking/available-halls/{checkin_date}',[BookingController::class,'available_halls']);
    Route::resource('/booking',BookingController::class);
    Route::get('dashboard', fn () => view('hall.dashboard'))->name('hall.dashboard');
    Route::get('chat', [ChatController::class, 'index'])->name('hall.chat');
});


/**
 * grouped routes for couple
 *
 * !couple is equal to customer
 *
 *  */
Route::prefix('couple')->middleware(['auth', 'couple'])->group(function () {
    Route::get('dashboard', fn () => view('couple.dashboard'))
    ->name('couple.dashboard');
    Route::get('profile', [CustomerProfileController::class, 'index'])->name('couple.profile');
    Route::get('booked_hall',[BookedHallController::class,'index'])->name('couple.bookedhall');
    Route::get('transaction',[CustomerTransactionController::class,'index'])->name('couple.transaction');
});

// grouped routes for front site
Route::prefix('front')->group(function (){

    Route::get('home', [FrontHomeController::class, 'index'])->name('front.home');
    Route::get('search', [SearchResultController::class, 'index'])->name('front.search');
    Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
    Route::get('about', [AboutController::class, 'index'])->name('front.about');
    Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
    Route::get('hall_details', [HallDetailsController::class, 'index'])->name('front.hall.details');
});

