<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/' , [HomeController::class , 'index']) ;


Route::get('/redirect' , [HomeController::class , 'redirect']) ;

Route::get('/view_catagory' , [AdminController::class , 'view_catagory']) ;
Route::post('/add_catagory' , [AdminController::class , 'add_catagory']) ;
Route::get('/delete_catagory/{id}' , [AdminController::class , 'delete_catagory']) ;


Route::get('/view_product' , [AdminController::class , 'view_product']) ;
Route::post('/add_product' , [AdminController::class , 'add_product']) ;
Route::get('/show_product' , [AdminController::class , 'show_product']) ;
Route::get('/delete_product/{id}' , [AdminController::class , 'delete_product']) ;
Route::get('/update_product/{id}' , [AdminController::class , 'update_product']) ;
Route::post('/update_product_confirm/{id}' , [AdminController::class , 'update_product_confirm']) ;




Route::get('/product_details/{id}' , [HomeController::class , 'product_details']) ;
Route::get('/all_product' , [HomeController::class , 'all_product']) ;
Route::get('/about' , [HomeController::class , 'about']) ;
Route::get('/blog' , [HomeController::class , 'blog']) ;
Route::get('/contact' , [HomeController::class , 'contact']) ;

Route::post('/add_message' , [HomeController::class , 'add_message']) ;
Route::get('/show_message' , [AdminController::class , 'show_message']) ;


Route::get('/fidelity_cart' , [AdminController::class , 'fidelity_cart'])->name('fidelity_cart') ;
Route::get('/cart/{id}' , [AdminController::class , 'cart']) ;
Route::post('/add_cart/{id}' , [AdminController::class , 'add_cart']) ;



Route::get('/points/{id}' , [AdminController::class , 'points']) ;
Route::post('/add_points/{id}' , [AdminController::class , 'add_points']) ;


Route::get('/delete_carte/{id}' , [AdminController::class , 'delete_carte']) ;



Route::get('/fidelity_card' , [HomeController::class , 'fidelity_card'])->name('fidelity_card') ;


Route::get('/search_product' , [HomeController::class , 'search_product']);
Route::get('/filter/{catagory}' , [HomeController::class , 'filter'])->name('filter');



Route::get('/view_product_sold' , [AdminController::class , 'view_product_sold']) ;
Route::post('/add_product_sold' , [AdminController::class , 'add_product_sold']) ;
Route::get('/show_product_sold' , [AdminController::class , 'show_product_sold']) ;
Route::get('/delete_product_sold/{id}' , [AdminController::class , 'delete_product_sold']) ;
Route::get('/update_product_sold/{id}' , [AdminController::class , 'update_product_sold']) ;
Route::post('/update_product_confirm_sold/{id}' , [AdminController::class , 'update_product_confirm_sold']) ;


Route::get('/product_sold_details/{id}' , [HomeController::class , 'product_sold_details']) ;

























