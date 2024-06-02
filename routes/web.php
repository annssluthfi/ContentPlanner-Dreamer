<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PlannerController;
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
    return view('dreamer.welcome');
})->name('welcome');

Route::get('/register', [UserController::class, 'index'])->name('index')->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->name('store');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);

Route::post('/edit', [PlannerController::class, 'edit'])->name('edit');

Route::resource('/planner', PlannerController::class)->middleware('auth');

Route::post('/logout', [UserController::class, 'logout']);

