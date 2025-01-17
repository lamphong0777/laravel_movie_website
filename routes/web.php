<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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

//Route::get('/', function () {
//    return view('index');
//});

Route::prefix('/')->group(function () {
    Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
    Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');
});
