<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('beranda', ['Name' => 'CAKEBYCPK', 'email' => 'cpk@gmail.com', 'Alamat' => 'Sako']);
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);

});
Route::resource('prodi', ProdiController::class);