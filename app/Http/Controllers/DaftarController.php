<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Pendaftaran;
// use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
     public function DaftarEkskul(Request $request)
     {
$user = Auth::user('siswa');
$nis_user  = $user->nis;
$kode_ekskul = $request->kode;

Ekskul::create([
    'nis' => $nis_user,
    'kode' => $kode_ekskul

]);
return redirect ('dashboard');
     }
     public function index()
     {
        $ekskul = Ekskul::all();
        return view ('daftar.index',compact(['ekskul']));
     }
     public function store(Request $request){
          // return $request->all();
          // Ekskul::create($request->except(['_token','submit']));
          $user = Auth::user();
          Pendaftaran::create([
               'nis' => $user->nis,
               'kode' => $request->kode_ekstrakurikuler
          ]);
          // $user->ekstrakurikuler = $request->ekstrakurikuler;
          // $user->save();
          
          return redirect('/dashboard');
}
}