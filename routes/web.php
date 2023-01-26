<?php

use App\Http\Controllers\Archive\ArchiveController;
use App\Http\Controllers\email\EmailController;
use App\Http\Controllers\InvDetailsController;
use App\Http\Controllers\Invoice\InvoiceContrller;
use App\Http\Controllers\Invoice\Paid_BillsController;
use App\Http\Controllers\Invoice\Partially_PaidController;
use App\Http\Controllers\Invoice\SearchController;
use App\Http\Controllers\Invoice\UnpaidController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\payment\PaymentController;
use App\Http\Controllers\pdf\PdfController;
use App\Http\Controllers\Product\ProductsController;
use App\Http\Controllers\Reviews\ReviewsController;
use App\Http\Controllers\section\SectionsContrller;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\users\UsersController;
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
Auth::routes(['register' =>false]);


Route::controller(MainController::class)->group(function (){

    Route::get('/','main')->name('main.index');

});


//=======Controller=============================================================
Route::prefix('dashboard')->group(function (){

    //================================DashboardController======================================//
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/','index')->name('index')->middleware('auth');
        Route::get('profile','profile')->name('profile')->middleware('auth');
        Route::put('update_profile','update_profile')->name('update_profile')->middleware('auth');
    });
    //======================End==========DashboardController======================================//

////================================== pages Invoice  ==================================================================================//
///
    //================================InvoiceContrller======================================//
    Route::resource('invoice',InvoiceContrller::class)->middleware('auth');
    Route::get('section/{id}',[InvoiceContrller::class,'getproducts'])->name('section')->middleware('auth');
    Route::delete('delete_all_invoice/{id}',[InvoiceContrller::class,'delete_all_invoice'])->name('delete_all_invoice')->middleware('auth');
    Route::get('print_invoice/{id}',[InvoiceContrller::class,'print_invoice'])->name('print_invoice')->middleware('auth');

    //payment
    Route::get('payment/{id}',[InvoiceContrller::class,'payment'])->name('payment_edite')->middleware('auth');
    Route::post('payment/{id}',[InvoiceContrller::class,'payment_update'])->name('payment_update')->middleware('auth');
    //======================End==========InvoiceContrller======================================//

    //================================Paid_BillsController======================================//
    Route::resource('paid',Paid_BillsController::class)->middleware('auth');
    //======================End==========Paid_BillsController======================================//

    //================================InvoiceContrller======================================//
    Route::resource('unpaid',UnpaidController::class)->middleware('auth');
    //======================End==========InvoiceContrller======================================//


    //================================Partially_PaidController======================================//
    Route::resource('partially',Partially_PaidController::class)->middleware('auth');
    //======================End==========Partially_PaidController======================================//



    //================================ArchiveController======================================//
    Route::resource('archive',ArchiveController::class)->middleware('auth');
    //======================End==========ArchiveController======================================//


////=============End====================  pages Invoice   ===================================================================================//

    //================================SectionsContrller======================================//
    Route::resource('sections',SectionsContrller::class)->middleware('auth');
    //======================End==========SectionsContrller======================================//

    //================================ProductsController======================================//
    Route::resource('product',ProductsController::class)->middleware('auth');
    //======================End==========ProductsController======================================//

    //================================InvDetailsController======================================//
    Route::resource('details',InvDetailsController::class)->middleware('auth');
    Route::post('add_details/{id}',[InvDetailsController::class,'add_details'])->name('add_details');
    //======================End==========InvDetailsController======================================//


    //================================UsersController======================================//
    Route::resource('user',UsersController::class)->middleware('auth');
    Route::put('edit_check/{id}',[UsersController::class,'edit_check'])->name('edit_check');
    Route::put('blocked/{id}',[UsersController::class,'blocked'])->name('blocked');
    //======================End==========UsersController======================================//


    //================================EmailController======================================//
    Route::controller(EmailController::class)->group(function (){
        Route::post('email_user/{id}','email_user')->name('email_user')->middleware('auth');

    });
    //======================End==========EmailController======================================//



    //================================PdfController======================================//
       Route::controller(PdfController::class)->group(function (){
           Route::get('pdf_invoice','pdf_invoice')->name('pdf_invoice')->middleware('auth');
           Route::get('pdf_condition','pdf_condition')->name('pdf_condition')->middleware('auth');
       });
    //======================End==========PdfController======================================//





    //================================ReviewsController======================================//
    Route::controller(ReviewsController::class)->group(function (){
        Route::get('review/{id}','review')->name('review');
        Route::post('store','store')->name('store');
        Route::get('store','store')->name('store');

    });
    //======================End==========ReviewsController======================================//


});


Route::prefix('check')->controller(PaymentController::class)->group(function (){
    //================================PaymentController======================================//
    Route::get('check_out/{id}','check_out')->name('check_out');
    Route::get('payment_payment/{id}','payment_payment')->name('payment_payment');
    Route::get('receipt','receipt')->name('receipt');
    Route::get('check_invoice/{id}','check_invoice')->name('check_invoice');
    //======================End==========PaymentController======================================//

});

