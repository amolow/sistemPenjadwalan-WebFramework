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

Use App\Http\Controllers\MahasiswaController;
Use App\Http\Controllers\DosenController;
Use App\Http\Controllers\JadwalController;


//route mahasiswa

Route::get('/mahasiswa', [MahasiswaController::class, 'index']); 

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']); 

Route::get('/mahasiswa/{id}/edit/', [MahasiswaController::class, 'edit']); 

Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::post('/mahasiswa/{id}', [MahasiswaController::class, 'show']);

Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'removeData']);

Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']); 



//route dosen

Route::get('/dosen', [DosenController::class, 'index']); 

Route::get('/dosen/create', [DosenController::class, 'create']); 

Route::get('/dosen/{id}/edit', [DosenController::class, 'edit']);

Route::post('/dosen', [DosenController::class, 'store']);

Route::post('/dosen/{id}', [DosenController::class, 'show']);


Route::get('/dosen/delete/{id}', [DosenController::class, 'removeData']);

Route::get('/dosen/{id}', [DosenController::class, 'show']); 



//route jadwal

Route::get('/jadwal', [JadwalController::class, 'index']); 

Route::get('/jadwal/create', [JadwalController::class, 'create']); 

Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit']); 

Route::post('/jadwal/', [JadwalController::class, 'store']);

Route::post('/jadwal/{id}', [JadwalController::class, 'show']);

Route::get('/jadwal/delete/{id}', [JadwalController::class, 'removeData']);

Route::get('/jadwal/{id}', [JadwalController::class, 'show']);



