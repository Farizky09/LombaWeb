<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\daftarController;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/beranda');
});
Auth::routes();
Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard',[DashboardController::class,'index']);


    // Route::get('/dashboard ', [DashboardController::class, 'index']);

    Route::get('/home', [DashboardController::class, 'index']);
    // Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit']);
    Route::put('/dashboard/{id}/', [DashboardController::class, 'update']);
    Route::get('/dashboard', [DashboardController::class, 'getProfile']);
    Route::get('/siswa', [UserController::class, 'index']);
    Route::get('/siswa/create', [UserController::class, 'create']);
    Route::post('/siswa/store', [UserController::class, 'store']);
    Route::get('/siswa/{id}/edit', [UserController::class, 'edit']);
    Route::put('/siswa/{id}/', [UserController::class, 'update']);
    Route::delete('/siswa/{id}/', [UserController::class, 'destroy']);



    Route::get('/daftarEkskul', [DaftarController::class, 'index']);
    Route::get('/daftarEkskul/create', [DaftarController::class, 'create']);
    Route::post('/daftarEkskul/store', [DaftarController::class, 'store']);


    Route::get('/ekskul', [EkskulController::class, 'index']);
    Route::get('/ekskul/create', [EkskulController::class, 'create']);
    Route::post('/ekskul/store', [EkskulController::class, 'store']);
    Route::get('/ekskul/{id}/edit', [EkskulController::class, 'edit']);
    Route::put('/ekskul/{id}/', [EkskulController::class, 'update']);
    Route::delete('/ekskul/{id}/', [EkskulController::class, 'destroy']);

    Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
    Route::get('/pendaftaran/create', [PendaftaranController::class, 'create']);
    Route::post('/pendaftaran/store', [PendaftaranController::class, 'store']);
    Route::get('/pendaftaran/{id}/edit', [PendaftaranController::class, 'edit']);
    Route::put('/pendaftaran/{id}/', [PendaftaranController::class, 'update']);
    Route::delete('/pendaftaran/{id}/', [PendaftaranController::class, 'destroy']);




});

Route::get('/beranda', [BerandaController::class, 'index']);
