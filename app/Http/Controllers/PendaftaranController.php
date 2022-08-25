<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PendaftaranController extends Controller
{
    public function index(){
    DB::table('pendaftaran')->join('siswa','siswa.nis','=','pendaftaran.nis')->join('ekskul','ekskul.kode','=','pendaftaran.kode')->select('siswa.nis','siswa.name','ekskul.kode','ekskul.name_ekskul')->get() ;
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index',compact(['pendaftaran']));
    }
    public function create(){
        return view('pendaftaran.create');
    }
    public function store(Request $request){
        Penpendaftaranan::create($request->except(['_token','submit']));
        return redirect('/pendaftaran');

    }
    public function edit($id){
        $pendaftaran = Pendaftaran::find($id);
        return view('pendaftaran.edit',compact(['pendaftaran']));
    }
    public function update($id, Request $request){
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->update($request->except(['_token','submit']));
        return redirect('/pendaftaran');
    }
    public function destroy($id){
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect('/pendaftaran');

    }
}
