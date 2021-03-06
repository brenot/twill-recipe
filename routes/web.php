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

Auth::routes();

Route::get('/home', [App\Http\Controllers\PageController::class, 'index'])->name('home');

Route::group(['prefix' => 'recipes'], function () {
    Route::get('/', [App\Http\Controllers\RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/{slug}', [App\Http\Controllers\RecipeController::class, 'show'])->name(
        'recipes.show'
    );
});
