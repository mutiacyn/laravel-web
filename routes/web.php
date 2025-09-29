<?php

use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//membuat route
Route::get('/pcr', function(){
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/nama/{param1}', function($param1){
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = ""){
    return 'Nim saya: '.$param1;
});

Route::get('/about', function(){
    return view('halaman-about');
});


Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);
