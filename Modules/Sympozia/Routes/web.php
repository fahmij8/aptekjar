<?php

use Illuminate\Support\Facades\Route;
use \Modules\Sympozia\Http\Livewire\Pages\About;
use \Modules\Sympozia\Http\Livewire\Pages\Home;
use \Modules\Sympozia\Http\Livewire\Pages\Schedule;

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

Route::prefix('sympozia')->group(function () {
    Route::get('/', Home::class)->name('sympozia.home');
    Route::get('/schedule', Schedule::class)->name('sympozia.schedule');
    Route::get('/about', About::class)->name('sympozia.about');
});