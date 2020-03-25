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

Route::view('/', 'home');
Route::view('page/{page}', 'page');
Route::view('topik/{topik}', 'topik');
Route::view('tilawah', 'tilawah');
Route::view('medina', 'medina');
Route::view('index/surat', 'surat');
Route::view('index/juz', 'juz');
Route::view('index/tema', 'tema');
Route::view('{nomorSurat}-{surat}', 'surat');
Route::view('{nomorSurat}-{surat}/ayat-{nomorAyat}', 'ayat');
Route::view('tag/{tag}', 'tag');

Route::view('hadits', 'hadits-book.index');
Route::view('hadits/{slug}', 'hadits.index');
Route::view('hadits/{slug}/{number}', 'hadits.show');
