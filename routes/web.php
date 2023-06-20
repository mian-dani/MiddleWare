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

/// applying on multiple route
Route::middleware('auth')->group(function () {
    Route::get("/protected-route", [MiddlewareController::class, 'firstRoute'])->name('first.route');
    Route::get("/protected-route2", [MiddlewareController::class, 'secondRoute'])->name('second.route');
    Route::get("/protected-route3", [MiddlewareController::class, 'thirdRoute'])->name('third.route');
    
});

Route::get('/login', [MiddlewareController::class, 'login'])->name('login');
Route::get('/logout', [MiddlewareController::class, 'logout']);

/// applying on single route
Route::get('/purchaseitem', [MiddlewareController::class, 'purchase'])->middleware('auth');



//// login and logout users 
Route::get('/loginuser', [MiddlewareController::class, 'loginUser']);
Route::get('/logoutuser', [MiddlewareController::class, 'logoutUser']);

