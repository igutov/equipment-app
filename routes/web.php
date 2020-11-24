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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'equipments'], function () {
    Route::get('/', [App\Http\Controllers\EquipmentController::class, 'index']);
    Route::get('/create', [App\Http\Controllers\EquipmentController::class, 'create'])->name('create');
});

Route::group(['prefix' => 'hangars'], function () {
    Route::get('/', [App\Http\Controllers\EquipmentController::class, 'index']);
    // Route::get('/create', [App\Http\Controllers\EquipmentController::class, 'create'])->name('create');
});

Route::group(['prefix' => 'cards'], function () {
    Route::get('/', [App\Http\Controllers\CardController::class, 'index']);

    Route::pattern('id', '[0-9]+');
    Route::get('/create/{id?}', [App\Http\Controllers\CardController::class, 'create'])->name('card_create');
    Route::post('/store', [App\Http\Controllers\CardController::class, 'store'])->name('card_store');
    // Route::get('/create', [App\Http\Controllers\EquipmentController::class, 'create'])->name('create');
});

// Route::get('/equipments', [App\Http\Controllers\EquipmentController::class, 'index']);
// Route::get('/equipments/create', [App\Http\Controllers\EquipmentController::class, 'create'])->name('home');

Route::get('/hangars', [App\Http\Controllers\HangarController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
