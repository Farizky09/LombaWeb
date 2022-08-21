<?php

namespace App\Http\Controllers;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        $data_ekskul = \App\Ekskul::all();
        return view('ekskul.index',['data_ekskul' -> $data_ekskul]);
    }
}
