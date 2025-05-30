<?php

use App\Http\Controllers\prodiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('beranda', [
        'name' => 'Cindy',
        'email' => 'cindy@gmail.com',
        'alamat' => 'sako'
    ]);
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita', [
        'id' => $id,
        'judul' => $judul
    ]);
});

//membuat rute ke halaman prodi index melalui controller prodicontroller

Route::resource('prodi', ProdiController::class);
Route::get('/prodi/index', [ProdiController::class,'index']);