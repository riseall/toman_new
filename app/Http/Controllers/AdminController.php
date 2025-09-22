<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Kalibrasi;
use App\Models\Permintaan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalUser = User::all()->count();
        $totalCompany = Company::all()->count();
        $totalTollIn = Permintaan::all()->count();
        $totalKalibrasi = Kalibrasi::all()->count();
        $totalPesan = Contact::all()->count();
        return view('dashboard', compact('totalUser', 'totalCompany', 'totalTollIn', 'totalKalibrasi', 'totalPesan'));
    }
}
