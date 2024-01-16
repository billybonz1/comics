<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('main');

Route::get('/catalog', function () {
    return Inertia::render('Catalog', [
    ]);
})->name('catalog');

Route::get('/support', function () {
    return Inertia::render('Support', [
    ]);
})->name('support');

Route::get('/add-title', function () {
    return Inertia::render('AddTitle', [
    ]);
})->name('addtitle');

Route::get('/upload-comics', function () {
    return Inertia::render('UploadComics', [
    ]);
})->name('uploadcomics');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
