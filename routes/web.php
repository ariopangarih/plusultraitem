<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\Controller;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function (){

    Route::get('/dashboard', [Controller::class, 'enter'])->name('dashboard');
    
    Route::get('/events', [EventsController::class, 'show'])->name('events');

    Route::get('/activity', function () {
        return view('activity');
    })->name('activity');
});


require __DIR__.'/auth.php';
