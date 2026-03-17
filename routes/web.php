<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "Halaman Home<br>";
    echo"Baris Kedua";
});
Route::get("/mahasiswa/ti/yayaiy", function () {
    echo"Salamaik Yo Yayaiy";
});
//route parameter = wajib isi url
Route::get("/mahasiswa/{nama}", function ($nama) {
    return "Cihuyy  $nama";
});
Route::get("/mahasiswa/{nama}/{nim}", function ($nama, $nim) {
    return "Cihuyy  $nama, NIM: $nim";
});
//route opsional parameter=tidak wajib (?)
Route::get("/mahasiswa/{dosen?}/{nik?}", function ($dosen="a1", $nik="b1") {
    return "Cihuyy  $dosen, NIM: $nik";
});
Route::redirect('/home','/mahasiswa');
Route::fallback(function () {
    return "<h1>ERROR DEK!!!<h1>";
});
Route::get('/mahasiwa', function () {
    return view('akademik.mahasiwa', ['mhs1'=> 'Wowo']);
});
// web.php
Route::get('/dosen', function () {
    $arrDosen = ['Pak Yori Adi Atma'];
    return view('akademik.dosen', ['dosen' => $arrDosen]);
});

Route::get('/pnp/{jurusan}/{prodi}', function ($jurusan, $prodi) {
    $data = [$jurusan, $prodi];
    return view('akademik.prodi')->with('data', $data);
})->name('prodi');