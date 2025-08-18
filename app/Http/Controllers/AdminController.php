<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Pastikan hanya admin yang bisa mengakses halaman ini
        return view('dashboard'); // Ganti dengan view yang sesuai
    }
}
