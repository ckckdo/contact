<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

// お問い合わせ入力ページ
Route::get('/contacts',[ContactsController::class,'index']);

// 確認ページ
Route::get('/contacts/confirm', [ContactsController::class,'confirm'])->name('contact.confirm');
Route::post('/contacts/confirm', [ContactsController::class,'confirm'])->name('contact.confirm');

// 完了ページ
Route::get('/contacts/complete',[ContactsController::class,'complete'])->name('complete');
