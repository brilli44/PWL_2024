<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('welcome');
});


Route::get('/hello', function () {
    return 'Hello World';
    });

    
Route::get('/world', function () {
    return 'World';
    });

Route::get('/', function () {
        return 'Selamat Datang';
        });

Route::get('/about', function () {
            return 'DATA MAHASISWA <br> NIM : 2241720041 <br>
            Nama Mahasiswa : Brilliantna Salsabila';
            });
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


