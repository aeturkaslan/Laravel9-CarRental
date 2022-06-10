<?php

use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\CarController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\MessageController;
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

// ********************* HOME PAGE ROUTES *************************
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');

//Route -> Controller -> View
Route::get('/test', [HomeController::class,'test'])->name('test');

//Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

//Route with post
Route::post('/save', [HomeController::class,'save'])->name('save');

//Car detail route
Route::get('/car/{id}', [HomeController::class,'car'])->name('car');

//Categorycars route
Route::get('/categorycars/{id}/{slug}', [HomeController::class,'categorycars'])->name('categorycars');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ********************* ADMIN PANEL ROUTES *************************

Route::prefix('admin')->name('admin.')->group(function () {

Route::get('/', [AdminPanelHomeController::class,'index'])->name('index');


// ********************* GENERAL ROUTES *************************

Route::get('/setting', [AdminPanelHomeController::class,'setting'])->name('setting');
Route::post('/setting', [AdminPanelHomeController::class,'settingUpdate'])->name('setting.update');



// ********************* ADMIN CATEGORY ROUTES *************************

Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {

Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::post('/update/{id}', 'update')->name('update');
Route::get('/destroy/{id}', 'destroy')->name('destroy');
Route::get('/show/{id}', 'show')->name('show');

});


// ********************* ADMIN CAR ROUTES *************************

Route::prefix('/car')->name('car.')->controller(CarController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
    
    });


    // ********************* ADMIN CAR IMAGE GALLERY ROUTES *************************

Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {

    Route::get('/{cid}', 'index')->name('index');
    Route::post('/store/{cid}', 'store')->name('store');
    Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');
    
    });

    // ********************* ADMIN MESSAGE ROUTES *************************

Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    
    });


    // ********************* ADMIN FAQ ROUTES *************************

Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
    
    });
});