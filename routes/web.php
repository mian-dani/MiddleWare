<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiddlewareController;

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
    return view('welcome');
});


Route::middleware('dummy')->group(function () {

    Route::get("/protected-route", [MiddlewareController::class, 'firstRoute'])->name('first.route');
    Route::get("/protected-route2", [MiddlewareController::class, 'secondRoute'])->name('second.route');
    Route::get("/protected-route3", [MiddlewareController::class, 'thirdRoute'])->name('third.route');
    
});

