<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa = User::where('id', '!=', '1')->get();
        return view('dashboard.index', compact(['siswa']));
    }
    public function edit($id)
    {
        $siswa = User::find($id);
        return view('dashboard.edit', compact(['siswa']));
    }
    public function update($id, Request $request)
    {
        $siswa = User::find($id);
        $siswa->update($request->except(['_token', 'submit']));
        return redirect('/dashboard');
    }
}
