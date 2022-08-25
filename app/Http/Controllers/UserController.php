<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('siswa.index',compact(['user']));
    }
    public function create(){
        return view('siswa.create');
    }
    public function store(Request $request){
        User::create($request->except(['_token','submit']));
        return redirect('/siswa'siswa
    public function edit($id){
        $user = User::find($id);
        return view('siswa.edit',compact(['user']));
    }
    public function update($id, Request $request){
        $user = User::find($id);
        $user->update($request->except(['_token','submit']));
        return redirect('/siswa');
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/siswa');

    }
}
