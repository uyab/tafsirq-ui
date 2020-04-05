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

Route::view('/', 'home')->name('home');
Route::view('topik/{topik}', 'topik');
Route::view('tilawah', 'tilawah');
Route::view('medina', 'medina');
Route::view('index/surat', 'surat')->name('quran.index');
Route::view('index/juz', 'juz')->name('juz.index');
Route::view('index/tema', 'tema')->name('tema.index');
Route::view('{nomorSurat}-{surat}', 'surat');
Route::view('{nomorSurat}-{surat}/ayat-{nomorAyat}', 'ayat');
Route::view('tag/{tag}', 'tag');

Route::view('fatwa/dsn-mui', 'fatwa.index')->name('fatwa.index');
Route::view('fatwa/dsn-mui/{slug}', 'fatwa.show')->name('fatwa.show');

Route::view('hadits', 'hadits-book.index')->name('hadits.books');
Route::view('hadits/{slug}', 'hadits.index')->name('hadits.index');
Route::view('hadits/{slug}/{number}', 'hadits.show');

Route::view('page/donasi', 'page.donasi')->name('page.donasi');
Route::view('page/kerja-sama', 'page.kerja-sama')->name('page.kerja-sama');

Route::view('konten/{category}', 'konten.index')->name('konten.index');
Route::view('konten/{category}/{slug}', 'konten.show')->name('konten.show');
