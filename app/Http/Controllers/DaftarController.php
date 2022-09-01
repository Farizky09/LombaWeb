<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Pendaftaran;
// use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

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
          return redirect('dashboard');
     }
     public function index()
     {
          $ekskul = [];
          $user = Auth::user();
          $ekstra = DB::table('users')
               ->join('pendaftaran', 'pendaftaran.nis', '=', 'users.nis')
               ->join('ekskul', 'ekskul.kode', '=', 'pendaftaran.kode')
               ->select('ekskul.kode', 'users.*')
               ->where('users.id', '=', $user->id)
               ->get();

          if (is_null($ekstra)) {
               // return $ekstra;
               $ekskul = Ekskul::all();
               return view('daftar.index', compact(['ekskul']));
          }
          //   return $ekstra;
          $ekskul = DB::table('ekskul');
          foreach ($ekstra as $eks) {
               $ekskul->where('kode', '!=', $eks->kode);
          }
          $ekskul = $ekskul->get();
          // return $listEkstra;
          return view('daftar.index', compact(['ekskul']));
     }
     public function store(Request $request)
     {
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
