<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Resource\view;


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



//backend
Route::get('/admin', [AdminController::class, 'index']);

//product
Route::get('/product', [AdminController::class, 'product'])->name ('product');
Route::get('/addproduct', [AdminController::class, 'addproduct'])->name ('addproduct');
Route::get('/editproduct', [AdminController::class, 'editproduct'])->name ('editproduct');

//category
Route::get('/category', [AdminController::class, 'category'])->name ('category');
Route::get('/addcategory', [AdminController::class, 'addcategory'])->name ('addcategory');
Route::get('/editcategory', [AdminController::class, 'editcategory'])->name ('editcategory');

//account
Route::get('/account', [AdminController::class, 'account'])->name ('account');
Route::get('/addaccount', [AdminController::class, 'addaccount'])->name ('addaccount');
Route::get('/editaccount', [AdminController::class, 'editaccount'])->name ('editaccount');

//oders
Route::get('/oders', [AdminController::class, 'oders'])->name ('oders');
Route::get('/detailoders', [AdminController::class, 'detailoders'])->name ('detailoders');