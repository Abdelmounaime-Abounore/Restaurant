<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/edit/{id}', [HomeController::class,'settings'])->name('settings');

Route::post('edit', [HomeController::class,'update'])->name('edit');

Route::get('/add-meals', function() {
    return view('add-meals');
})->name('meals.create');
    
Route::post('/store-meals', [MealController::class, 'store']);

Route::get('/home', [MealController::class, 'index'])->name('meals.index');

Route::get('delete/{id}', [MealController::class, 'destroy']);

Route::get('edit-meal/{id}', [MealController::class, 'showData']);

Route::post('edit-meals', [MealController::class, 'update']);