<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

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

Route::get('/home', function () {
    return view('public/home');
});

Route::prefix('/courses')->name('courses')->group(function () {
    Route::middleware('auth')->prefix('/{course}/lessons')->name('.lessons')->group(function () {
        Route::get('{lesson}', \App\Http\Controllers\Lessons\ShowLessonController::class)->name('.show');
        Route::post('{lesson}/save', \App\Http\Controllers\Lessons\SaveLessonController::class)->name('.save');
        Route::get('{lesson}/load', \App\Http\Controllers\Lessons\LoadLessonController::class)->name('.load');
    });
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


