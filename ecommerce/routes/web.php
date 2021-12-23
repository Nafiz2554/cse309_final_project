<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;
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
//backend route
Route::get('/admins',[AdminController::class,'index']);
Route::post('/admin.dashboard',[AdminController::class,'show_dashboard']);
Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);



//frontend route
Route::get('/',[HomeController::class,'index']);
Route::post('/add_to_cart',[HomeController::class,'addToCart']);

//category route here.....

Route::resource('/categories/',CategoryController::class);
Route::get('/cat-status{category}',[CategoryController::class,'change_status']);
Route::get('/edit/{category}',[CategoryController::class,'edit']);
Route::post('/update/{category}',[CategoryController::class,'update']);
Route::delete('/delete/{category}',[CategoryController::class,'delete']);
 

