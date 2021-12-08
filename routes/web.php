<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Leagues;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/leagues', [Leagues::class, 'getLeagues'], function() {
    return view('leagues');
})->middleware(['auth'])->name('leagues');

Route::get('/fixtures', function () {
    return view('fixtures');
})->middleware(['auth'])->name('fixtures');

Route::get('/players', function () {
    return view('players');
})->middleware(['auth'])->name('players');

Route::get('/managers', function () {
    return view('managers');
})->middleware(['auth'])->name('managers');

Route::get('/stats', function () {
    return view('stats');
})->middleware(['auth'])->name('stats');

require __DIR__.'/auth.php';
