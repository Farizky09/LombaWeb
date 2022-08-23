<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda.index');
    }
    public function index_pramuka()
    {
        return view ('beranda.pramuka');
    }
    public function index_paskibra()
    {
        return view('beranda.paskibra');
    }
    public function index_pmr()
    {
        return view('beranda.pmr');
    }
    public function index_basket()
    {
        return view('beranda.basket');
    }
    public function index_paduansuara()
    {
        return view('beranda.paduan-suara');
    }
    public function index_sepakbola()
    {
        return view('beranda.sepakbola');
    }
    public function index_futsal()
    {
        return view('beranda.futsal');
    }
    public function index_voli()
    {
        return view('beranda.voli');
    }
    public function index_teaterkesenian()
    {
        return view('beranda.teaterkesenian');
    }
    public function index_remajamasjid()
    {
        return view('beranda.remajamasjid');
    }
    public function index_tataboga()
    {
        return view('beranda.tataboga');
    }
    public function index_englishclub()
    {
        return view('beranda.englishclub');
    }

}
