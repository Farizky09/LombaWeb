<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{    
    public function index(){
        
        return redirect('dashboard');
    }
    public function edit($id)
    {
        $ekskul = Ekskul::all();        
        $siswa = Auth::user();
        return view('dashboard.edit', compact(['siswa','ekskul']));
    }
    public function update($id, Request $request)
    {
        $siswa = User::find($id);
        $siswa->update($request->except(['_token', 'submit']));
        return redirect('/dashboard');
    }
    public function getProfile()
    {
        $siswa = Auth::user();
        if($siswa->role == 'admin'){
            $ekstra = DB::table('users')
            ->join('pendaftaran', 'pendaftaran.nis','=','users.nis')
            ->join('ekskul', 'ekskul.kode','=','pendaftaran.kode')
            ->select('ekskul.nama_ekskul','users.*')
            ->get()
            ;
            // return $ekstra[0]->nama_ekskul;
            return view('dashboard.index',['ekstra'=>$ekstra]);

        }else{
            $ekstra = DB::table('users')
            ->join('pendaftaran', 'pendaftaran.nis','=','users.nis')
            ->join('ekskul', 'ekskul.kode','=','pendaftaran.kode')
            ->select('ekskul.nama_ekskul','users.name')
            ->where('users.nis','=',$siswa->nis)
            ->get()
            ;
            // return $ekstra;
            return view('dashboard.index',['siswa' => $siswa,'ekskul'=>$ekstra]);

        }
    }
    
}
