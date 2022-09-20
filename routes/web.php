<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibriController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/inserimentoLibri',[LibriController::class, 'createLibri'])->name('createLibri');
Route::post('/inserimentoLibri/post',[LibriController::class, 'storeLibri'])->name('postLibri');
Route::get('/inserimentoLibri/index', [LibriController::class, 'indexLibri'])->name('indexLibri');
