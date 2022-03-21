<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\HallTypeController;
use App\Http\Controllers\admin\HallController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\HallDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchResultController;
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




Route::get('/', function() {
    return view('front_view.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('auth')->group(function (){
    Route::post('login', [LoginController::class, 'authenticated'])->name('auth.login');
    Route::post('register', [RegisterController::class, 'validator'])->name('auth.register');
});

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard', fn () => view('admin.dashboard'))->name('admin.dashboard');
});

// grouped routes for hall
Route::prefix('hall')->middleware(['auth', 'hall'])->group(function () {

        Route::resource('/halltype', HallTypeController::class);
    // Delete Image
    Route::get('halltypeimage/delete/{id}',[HallTypeController::class,'destroy_image']);

    Route::resource('/hall',HallController::class);

    Route::resource('/customer',CustomerController::class);

    //booking controller
    Route::get('booking/available-halls/{checkin_date}',[BookingController::class,'available_halls']);
    Route::resource('/booking',BookingController::class);

    Route::get('dashboard', fn () => view())->name('hall.dashboard');
});

// grouped routes for customer
Route::prefix('customer')->middleware(['auth', 'customer'])->group(function () {
    Route::get('dashboard', fn () => view())->name('customer.dashboard');
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

