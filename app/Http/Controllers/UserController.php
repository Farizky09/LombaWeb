<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $siswa = User::where('id','!=','1')->get();
        return view('siswa.index',compact(['siswa']));
    }
    public function create(){
        return view('siswa.create');
    }
    public function store(Request $request){
        User::create($request->except(['_token','submit']));
        return redirect('/siswa');}
    public function edit($id){
        $siswa = User::find($id);
        return view('siswa.edit',compact(['siswa']));
    }
    public function update($id, Request $request){
        $siswa = User::find($id);
        $siswa->update($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/siswa');

    }
}
