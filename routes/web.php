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

Route::get('/', 'Frontend\\BookController@index')->name('homepage');
// Route untuk menampilkan data yg dipanggil dan dipassing dari hal index sesuai yg di pilih
// makanya di dalam route di butuhkan variabel untuk menampung pasing dari hal pemanggil
Route::get('/book/{book}', 'Frontend\\BookController@show')->name('book.show');
//menyimpan borrow history
//middleware('auth');-> digunkan untuk proteksi route ini hanya bisa di akses yg sudah Login -> dan berfungsi untuk mengambil user_id yg dibutuhkan borrow_history
Route::POST('/book/{book}/borrow', 'Frontend\\BookController@borrow')->name('book.borrow')->middleware('auth');

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');