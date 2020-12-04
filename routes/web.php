<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Echo', function () {
//     return view('Echo');
// });

Route::get('/CreateEvents', function () {
    return view('CreateEvents');
})->middleware();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/events', [App\Http\Controllers\EventController::class, 'index']);

Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'showEvent']);

Route::post('/events/{id}', [App\Http\Controllers\EventController::class, 'subscribe']);

Route::post('/profile/{id}', [App\Http\Controllers\EventController::class, 'profile']);


