<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::post('/messages', [MessageController::class, 'store'])
    ->name('messages.store');

Route::prefix('projects')->group(function() {
    Route::get('/profit-buddy', function() {
        return view('projects.profit-buddy');
    })->name('profit-buddy');

    Route::get('/bingo-buddy', function() {
        return view('projects.bingo-buddy');
    })->name('bingo-buddy');

    Route::get('/toolkit-ext', function() {
        return view('projects.toolkit-ext');
    })->name('toolkit-ext');

    Route::get('/twitch-toolkit', function() {
        return view('projects.twitch-toolkit');
    })->name('twitch-toolkit');
});