<?php

use App\Http\Controllers\admin\HallTypeController;
use App\Http\Controllers\admin\HallController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
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




Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){



Route::resource('/halltype', HallTypeController::class);
//asda
// Delete Image
Route::get('halltypeimage/delete/{id}',[HallTypeController::class,'destroy_image']);

Route::resource('/hall',HallController::class);

Route::resource('/customer',CustomerController::class);
Route::resource('/booking',BookingController::class);


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
});

Route::prefix('front')->group(function (){
Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
});

Route::get('front', function() {
    return view('front_view.index');
});






Auth::routes();

