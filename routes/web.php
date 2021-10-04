<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hallo Word";
});

Route::get('kedua', function () {
    return "Hallo Laravel";
});

Route::get('ketiga', function () {
    return "Hallo Rusla Ramdani";
});

Route::get('keempat', function () {
    return "Hallo Aziz Tubagus";
});

// Parameter Wajib
Route::get('kelima/{nama}/kelas/{kelas}', function ($nama, $kelas) {
    return "Nama saya adalah : ".$nama . "<br> Kelas : " . $kelas;
});

// Parameter Opsional
Route::get('keenam/{nama?}', function ($nama = "Wajib Diisi !!") {
    return "Nama saya adalah : " . $nama;
});

// Parameter Soal
Route::get('hitung-luas-segitiga/{alas?}/{tiggi?}', function ($alas = 1,$tinggi = 1) {

    echo "Alasnya Adalah : " . $alas;
    echo "<br> tingginya Adalah : " . $tinggi;

    $luas = $alas * $tinggi / 2;

    return "<br> Hasil Luas Segitiga : " . $luas;
});


// Parameter GRUP

Route::group(['prefix'=>'jurusan'], function() {
    Route::get('/', function () {
        return "Berhasil";
    });
    Route::get('kelas/{namakelas}', function ($namakelas) {
        return $namakelas;
    });
    Route::get('wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});

Route::get('data-siswa', [DataSiswaController::class, 'datasiswa']);
Route::get('data-siswi', [DataSiswaController::class, 'datasiswi']);
Route::get('nama/{nama}', [DataSiswaController::class, 'nama']);
Route::get('namanya/{nama?}', [DataSiswaController::class, 'namanya']);
Route::resource('use', UserController::class);
Route::resource('user', UserController::class);
