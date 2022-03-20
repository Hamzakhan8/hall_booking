<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\HallTypeController;
use App\Http\Controllers\admin\HallController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\SearchResultController;
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




// Route::get('/dashboard', function () {
//     return view('home');
// });

Route::get('/', function() {
    return view('front_view.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){



Route::resource('/halltype', HallTypeController::class);
// Delete Image
Route::get('halltypeimage/delete/{id}',[HallTypeController::class,'destroy_image']);

Route::resource('/hall',HallController::class);

Route::resource('/customer',CustomerController::class);

//booking controller
Route::get('booking/available-halls/{checkin_date}',[BookingController::class,'available_halls']);
Route::resource('/booking',BookingController::class);



Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
});

Route::prefix('front')->group(function (){

    Route::get('home', [FrontHomeController::class, 'index'])->name('front.home');
    Route::get('search', [SearchResultController::class, 'index'])->name('front.search');
    Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
    Route::get('about', [AboutController::class, 'index'])->name('front.about');
Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
});

Route::get('front', function() {
    return view('front_view.index');

});






Auth::routes();

