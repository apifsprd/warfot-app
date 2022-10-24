<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/paket', [App\Http\Controllers\MdpaketController::class, 'index']);

Route::get('/incomingorder', function () {
    return view('order.inorder');
});
Route::get('/orders', function () {
    return view('order.orders');
});
Route::get('/customers', function () {
    return view('customers');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/metodebayar', function () {
    return view('masterdata.metodebayar');
});
Route::get('/kontak', function () {
    return view('masterdata.kontak');
});
Route::get('/tipeorder', function () {
    return view('masterdata.tipeorder');
});
Route::get('/statusbayar', function () {
    return view('masterdata.statusbayar');
});
Route::get('/statusorder', function () {
    return view('masterdata.statusorder');
});
Route::get('/profile', function () {
    return view('profile');
});

// Developer
Route::get('/users', function () {
    return view('users');
});
Route::get('/role', function () {
    return view('role');
});
Route::get('/access', function () {
    return view('access');
});
Route::get('/pages', function () {
    return view('pages');
});