<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // return $siswa;
        return view('dashboard.index',['siswa' => $siswa]);
    }
    
}
