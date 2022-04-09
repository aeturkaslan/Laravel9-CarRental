<?php

use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\HomeController;
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

//Hello page
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
});

//Accessing homepage by calling controller
Route::get('/', [HomeController::class,'index'])->name('home');

//Route -> Controller -> View
Route::get('/test', [HomeController::class,'test'])->name('test');

//Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

//Route with post
Route::post('/save', [HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ********************* ADMIN PANEL ROUTES *************************

Route::get('/admin', [AdminPanelHomeController::class,'index'])->name('admin');