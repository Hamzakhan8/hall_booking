<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\hall\HallCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SearchResultController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\admin\SliderImgController;
use App\Http\Controllers\hall\ManageUserController;
use App\Http\Controllers\admin\ManageHallController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\ManageCoupleController;
use App\Http\Controllers\couple\BookingController as CoupleBookingController;
use App\Http\Controllers\admin\BookingController as AdminBookingController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\ContactsReplyController;
use App\Http\Controllers\couple\ProfileController as CoupleProfileController;
use App\Http\Controllers\couple\TransactionController as CoupleTransactionController;
use App\Http\Controllers\hall\HallsController;
use App\Http\Controllers\couple\CommentController as CoupleCommentController;
use App\Http\Controllers\couple\ReplyController;
use App\Http\Controllers\FrontCommentController;
use App\Http\Controllers\hall\CommentController as HallCommentController;
use App\Http\Controllers\couple\PaymentController;
use App\Http\Controllers\couple\StripeCustomerController;
use App\Http\Controllers\hall\ProfileController as HallProfileController;
use App\Http\Controllers\hall\ReplyController as HallReplyController;
use App\Http\Controllers\hall\TransactionController as HallTransactionController;
use App\Http\Controllers\admin\AboutController as AdminAboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FooterController;
use App\Http\Controllers\couple\DashboardController as CoupleDashboardController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\hall\DashboardController as HallDashboardController;

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









Route::get('/', [FrontHomeController::class, 'index']);

Route::prefix('auth')->group(function (){
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('login-form', [LoginController::class, 'showLoginForm'])->name('auth.login.show');

    Route::post('register', [RegisterController::class, 'validator'])
    ->name('auth.register');

    Route::get('register-form', [RegisterController::class, 'showRegisterForm'])
    ->name('auth.register.show');

    Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');

    Route::post('forget-password', [ForgetPasswordController::class, 'show'])->name('auth.forget.password');

    Route::post('store-forget-password', [ForgetPasswordController::class, 'store'])->name('auth.forget.password.store');
});

//admin routes
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){

    Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

    Route::controller(ProfileController::class)->group(function() {
        Route::get('profile', 'index')->name('admin.profile');
        Route::put('update_profile', 'update')->name('admin.profile.update');
        Route::put('update_password', 'pass_update')->name('admin.password.update');
    });

    Route::controller(ManageCoupleController::class)->group(function() {
        Route::get('manage_user', 'index')->name('admin.manage.user');
        Route::get('delete_user/{id}', 'destroy')->name('admin.delete.user');
    });

    Route::controller(ManageHallController::class)->group(function() {
        Route::get('manage_hall', 'index')->name('admin.manage.hall');
        Route::get('delete_hall/{id}', 'destroy')->name('admin.delete.hall');
    });

    Route::controller(TransactionController::class)->group(function() {
        Route::get('transaction', 'index')->name('admin.transaction');
        Route::get('transaction_delete/{id}', 'destroy')->name('admin.transaction.delete');
    });

    Route::controller(CommentController::class)->group(function() {
        Route::get('comment', 'index')->name('admin.comment');
        Route::get('comment_delete/{id}', 'destroy')->name('admin.comment.delete');
    });

    Route::controller(AdminBookingController::class)->group(function() {
        Route::get('booking', 'index')->name('admin.booking');
        Route::get('booking_delete/{id}', 'destroy')->name('admin.booking.delete');
    });

    Route::controller(AdminContactController::class)->group(function() {
        Route::get('contact', 'index')->name('admin.contact');
        Route::post('contact_store', 'store')->name('admin.contact.store');
        Route::get('contact_delete/{id}', 'destroy')->name('admin.contact.delete');
    });

    Route::post('contacts_reply', [ContactsReplyController::class, 'store'])
    ->name('admin.contact.reply.submit');

    Route::controller(SliderImgController::class)->group(function() {
        Route::get('slider_img', 'index')->name('admin.slider.img');
        Route::post('store_slider_img', 'store')->name('admin.slider.store');
        Route::put('slider_img_update/{id}', 'update')->name('admin.slider.update');
        Route::get('slider_img_delete/{id}', 'destroy')->name('admin.slider.delete');
    });

    Route::controller(AdminAboutController::class)->group(function(){
        Route::get('about_index', 'index')->name('admin.about.index');
        Route::post('about_store','store')->name('admin.about.store');
        Route::put('about_update/{about_id}','update')->name('admin.about.update');
    });

    Route::controller(FooterController::class)->group(function(){
        Route::get('footer_index', 'index')->name('admin.footer.index');
        Route::post('footer_store','store')->name('admin.footer.store');
        Route::put('footer_update/{footer_id}','update')->name('admin.footer.update');
    });
});

// grouped routes for hall
Route::prefix('hall')->middleware('auth', 'hall')->group(function () {

    Route::get('dashboard', [HallDashboardController::class, 'index'])->name('hall.dashboard');

    Route::controller(ManageUserController::class)->group(function () {
        Route::get('bookings', 'index')->name('hall.bookings');
        Route::get('bookings_delete/{id}', 'destroy')->name('hall.bookings.delete');
    });

    Route::controller(HallProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('hall.profile');
        Route::put('update_profile', 'update')->name('hall.profile.update');
        Route::put('update_password', 'pass_update')->name('hall.password.update');
    });

    Route::controller(HallCommentController::class)->group(function () {
        Route::get('comment', 'index')->name('hall.comment');
    });

    Route::controller(HallReplyController::class)->group(function () {
        Route::get('reply/{comment_id}', 'index')->name('hall.reply');
        Route::post('reply_create/{comment_id}', 'create')->name('hall.reply.create');
        Route::post('re_reply/{comment_id}', 'store')->name('hall.re_reply');
        Route::get('reply_destroy/{id}/{comment_id}', 'destroy')->name('hall.reply.destroy');
        Route::get('reply_delete/{id}/{comment_id}', 'delete')->name('hall.reply.delete');
    });

    // Route::resource('hall_category',HallCategoryController::class);
    Route::controller(HallCategoryController::class)->group(function () {
        Route::get('hall_category', 'index')->name('hall.category.index');
        Route::post('hall_category_store', 'store')->name('hall.category.store');
        Route::get('hall_category_destroy/{category_id}', 'destroy')->name('hall.category.destroy');
        Route::put('hall_category_update/{category_id}', 'update')->name('hall.category.update');
    });

    Route::controller(HallsController::class)->group(function () {
        Route::get('hall', 'index')->name('hall.halls.index');
        Route::get('hall_create', 'create')->name('hall.halls.create');
        Route::post('hall_store', 'store')->name('hall.halls.store');
        Route::get('hall_edit/{hall_id}', 'edit')->name('hall.halls.edit');
        Route::put('hall_update/{hall_id}', 'update')->name('hall.halls.update');
        Route::get('hall_destroy/{hall_id}', 'destroy')->name('hall.halls.destroy');
    });

    Route::controller(HallTransactionController::class)->group(function () {
       Route::get('hall_transaction', 'index')->name('hall.transaction.index');
    });
});

//  grouped routes for couple
Route::prefix('couple')->middleware(['auth', 'couple'])->group(function () {

    Route::get('dashboard', [CoupleDashboardController::class, 'index'])
    ->name('couple.dashboard');

    Route::controller(CoupleProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('couple.profile');
        Route::put('profile_update', 'update')->name('couple.profile.update');
        Route::put('password_update', 'pass_update')->name('couple.password.update');
    });

    Route::controller(CoupleBookingController::class)->group(function () {
        Route::get('booked_hall', 'index')->name('couple.booked.hall');
        Route::get('booking_delete/{id}', 'destroy')
        ->name('couple.booking.delete');
    });

    Route::controller(CoupleTransactionController::class)->group(function () {
        Route::get('transaction', 'index')->name('couple.transaction');
    });

    Route::controller(CoupleCommentController::class)->group(function () {
        Route::get('comment', 'index')->name('couple.comment');
        Route::get('comment_delete/{id}', 'destroy')->name('couple.comment.delete');
    });

    Route::controller(ReplyController::class)->group(function () {
        Route::get('reply/{comment_id}', 'index')->name('couple.reply');
        Route::post('re_reply/{comment_id}', 'store')->name('couple.re_reply');
        Route::get('reply_delete/{id}/{comment_id}', 'destroy')->name('couple.reply.delete');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::post('couple_pay', 'store')->name('couple.pay.store');
    });

    Route::controller(StripeCustomerController::class)->group(function () {
        Route::get('stripe_customer/{customer}/{request}', 'stripe_customer')
        ->name('couple.stripe.customer');
    });

});

// grouped routes for front site
Route::prefix('front')->group(function (){

    Route::get('home', [FrontHomeController::class, 'index'])->name('front.home');
    Route::get('contact', [ContactController::class, 'index'])->name('front.contact');
    Route::get('about', [AboutController::class, 'index'])->name('front.about');

    Route::controller(ContactController::class)->group(function () {
        Route::get('contact', 'index')->name('front.contact');
        Route::post('contact_store', 'store')->name('front.contact.store');
    });

    Route::controller(FrontCommentController::class)->group(function (){
        Route::post('front_comment', 'store')->name('front.hall.comment');
        Route::post('front_comment_reply', 'replyComment')->name('front.hall.comment.reply');
        Route::post('front_reply_reply', 'replyToReply')->name('front.hall.reply.reply');
    });

    // Routes with post methods
    Route::controller(SearchResultController::class)->group(function (){
        Route::get('search', 'index')->name('front.search');
        Route::get('search_details/{id}', 'details')->name('front.search.details');
        Route::get('by_category/{id}/{location}', 'byCategory')->name('front.search.by_category');
        Route::post('by_name', 'byName')->name('front.search.by_name');
        Route::post('by_location', 'byLocation')->name('front.search.by_location');
        Route::post('search_store', 'store')->name('front.search.store');
    });
});

