<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactControllerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontendController::class, 'welcome'])->name('welcome');
Route::get('/details/{id}', [FrontendController::class, 'details'])->name('details');
Route::post('/searchDetails', [FrontendController::class, 'searchDetails'])->name('searchDetails');
Route::get('/search', [FrontendController::class, 'search'])->name('search');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/support', [FrontendController::class, 'support'])->name('support');
Route::post('/storeContact', [FrontendController::class, 'storeContact'])->name('storeContact');



route::resource('/user',UserController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat', [ChatController::class, 'showChatPage']);
Route::post('/send-message', [ChatController::class, 'sendMessage']);

Route::middleware('admin')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/property',PropertyController::class);
    Route::resource('/carousel',CarouselController::class);
    route::resource('/employee',EmployeeController::class);
    route::resource('/contact',ContactControllerController::class);
   
});

