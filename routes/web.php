<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/nilai', [NilaiController::class, 'index']);

// Route::get('/mahasiswa', function () {
//     $data = Mahasiswa::all();
//     return view('mahasiswa.index', compact('data'));
// });

