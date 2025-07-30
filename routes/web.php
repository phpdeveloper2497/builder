<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/service', 'service')->name('service');
//    Route::get('/single', 'single')->name('single');
    Route::get('/team', 'team')->name('team');
});

Route::controller(TeamController::class)->group(function () {
    Route::get('/team', 'index')->name('team');
});

Route::controller(NotificationController::class)->group(function () {
   Route::get('/notification', 'create')->name('notification.create');
   Route::post('/notification', 'store')->name('notification.store');
});


Route::get('/service', [ServiceController::class, 'index'])->name('service');


