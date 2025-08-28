<?php

namespace App\Http\Controllers;

use App\Models\FasilitasProduksi;
use Illuminate\Http\Request;

class FasilitasProduksiController extends Controller
{

    function index()
    {
        $tollMurni = FasilitasProduksi::all();
        return view('user.layanan.toll_murni', compact('tollMurni'));
    }
}
