<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;

//課題の3-----------------------------------------------------
use App\Http\Controllers\AAAController;

//課題の4-----------------------------------------------------
use App\Http\Controllers\Admin\ProfileController;

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

Route::controller(NewsController::class)->prefix('admin')->group(function () {
    Route::get('news/create', 'add');
});

//課題の3-----------------------------------------------------
Route::controller(AAAController::class)->group(function () {
    Route::get('AAA/', 'bbb');
});

//課題の4-----------------------------------------------------
Route::controller(ProfileController::class)->prefix('admin')->group(function () {
    Route::get('profile/create', 'add');
    Route::get('profile/edit', 'edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
