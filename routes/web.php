<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;

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
Route::middleware(['auth'])->group(function(){
    
    Route::get('/siswa',[SiswaController::class,'index']);
    Route::get('/siswa/create',[SiswaController::class,'create']);
    Route::post('/siswa/store',[SiswaController::class,'store']);
    Route::get('/siswa/{id}/edit',[SiswaController::class,'edit']);
    Route::put('/siswa/{id}/',[SiswaController::class,'update']);
    Route::delete('/siswa/{id}/',[SiswaController::class,'destroy']);

       Route::get('/ekskul',[EkskulController::class,'index']);
       Route::get('/ekskul/create',[EkskulController::class,'create']);
       Route::post('/ekskul/store',[EkskulController::class,'store']);
       Route::get('/ekskul/{id}/edit',[EkskulController::class,'edit']);
       Route::put('/ekskul/{id}/',[EkskulController::class,'update']);
       Route::delete('/ekskul/{id}/',[EkskulController::class,'destroy']);
});
Auth::routes();
Route::get('/beranda',[BerandaController::class,'index']);
Route::get('/beranda/pramuka',[BerandaController::class,'index_pramuka']);
Route::get('/beranda/paskibra',[BerandaController::class,'index_paskibra']);
Route::get('/beranda/pmr',[BerandaController::class,'index_pmr']);
Route::get('/beranda/basket',[BerandaController::class,'index_basket']);
Route::get('/beranda/paduansuara',[BerandaController::class,'index_paduansuara']);
Route::get('/beranda/sepakbola',[BerandaController::class,'index_sepakbola']);
Route::get('/beranda/futsal',[BerandaController::class,'index_futsal']);
Route::get('/beranda/voli',[BerandaController::class,'index_voli']);
Route::get('/beranda/teaterkesenian',[BerandaController::class,'index_teaterkesenian']);
Route::get('/beranda/remajamasjid',[BerandaController::class,'index_remajamasjid']);
Route::get('/beranda/tataboga',[BerandaController::class,'index_tataboga']);
Route::get('/beranda/englishclub',[BerandaController::class,'index_englishclub']);




Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
