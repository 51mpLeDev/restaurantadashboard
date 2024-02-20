<?php

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

Route::get('{id}/admin', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('{id}/admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
