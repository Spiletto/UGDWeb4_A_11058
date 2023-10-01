<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('halamanHome');
});

Route::get('/halamanHome', function () {
    return view('halamanHome');
});

Route::get('/halamanProfil', function () {
    return view('halamanProfil',[
        "nama" => "Marselinus Dira Agaska",
        "bio" => "Seorang mahasiswa informatika UAJY",
        "alamat" => "Jl. Rumah-mainan no. 27",
        "email" => "tebaksendiri@gmail.com",
        "telepon" => "0987654321",
        "hobi" => "Main"
    ]);
});

Route::get('/halamanForm', function () {
    return view('halamanForm',[
        "nama" => "Marselinus Dira Agaska",
        "npm" => "210711058",
        "email" => "tebaksendiri@gmail.com",
        "fakultas" => "Fakultas Teknologi Industri",
        "jurusan" => "Informatika"
    ]);
});
