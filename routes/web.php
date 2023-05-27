<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'index']);
Route::get('/catalog', [MainController::class, 'catalog']);
Route::get('/product/{id}', [MainController::class, 'product']);

Route::get('/lab4_1', function () {
    return view('lab4_1');
});
Route::get('/lab4_2', function () {
    return view('lab4_2');
});