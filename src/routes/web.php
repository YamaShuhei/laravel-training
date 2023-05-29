<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//問い合わせ一覧
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
//問い合わせ新規投稿
Route::get('/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');
Route::post('/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');

