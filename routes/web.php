<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MigrateDatabaseController;

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
    return view('layouts/welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/app', function () {
        return view('angular-app');
    })->name('angular-app');
});

Route::get('/migrate-database', [MigrateDatabaseController::class, 'migrateDatabase']);