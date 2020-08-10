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

Route::get('/data-table', function () {
    return view('data-table');
});

// ROUTE RESOURCE INI SUDAH MENYESUAIKAN DENGAN ELOQUENT DAN DIBUAT SEJAK HARI JUMAT. 
// BERHUBUNG TUGAS HARI INI TENTANG ELOQUENT, 
// JADI FILE INI TIDAK ADA PERUBAHAN DAN SAYA ANGGAP SUDAH MENYELESAIKAN TUGAS
Route::resource('pertanyaan', 'PertanyaanController');
