<?php

namespace App\Http\Controllers;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index(){
        $ekskul = Ekskul::all();
        return view('ekskul.index',compact(['ekskul']));
    }
    public function create(){
        return view('ekskul.create');
    }
    public function store(Request $request){
        Ekskul::create($request->except(['_token','submit']));
        return redirect('/ekskul');

    }
    public function edit($id){
        $ekskul = Ekskul::find($id);
        return view('ekskul.edit',compact(['ekskul']));
    }
    public function update($id, Request $request){
        $ekskul = Ekskul::find($id);
        $ekskul->update($request->except(['_token','submit']));
        return redirect('/ekskul');
    }
    public function destroy($id){
        $ekskul = Ekskul::find($id);
        $ekskul->delete();
        return redirect('/ekskul');

    }
}
