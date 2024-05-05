<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgrammingNoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\CategoryController;

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

Route::get('/top/{category?}', [CategoryController::class, 'showTop'])->name('top');
Route::get('/frameworks/{name}', [CategoryController::class, 'showFrameworkDetails'])->name('framework.details');
Route::get('/languages/{name}', [CategoryController::class, 'showLanguageDetails'])->name('language.details');