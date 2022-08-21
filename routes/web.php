<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkskulController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
