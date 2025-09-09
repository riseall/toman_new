<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\FasilitasProduksi;
use App\Models\Kalibrasi;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LayananController extends Controller
{
    function getTollMurni()
    {
        $fasilitas = FasilitasProduksi::where('is_active', 1)->get();
        $certif = Certificate::all();
        return view('user.layanan.toll_murni', compact('fasilitas', 'certif'));
    }

    function getTollBeli()
    {
        $fasilitas = FasilitasProduksi::where('is_active', 1)->get();
        $product = Product::where('prod_is_active', 1)->paginate(12);
        $certif = Certificate::all();
        return view('user.layanan.toll_beli', compact('fasilitas', 'product', 'certif'));
    }

    function getKalibrasi()
    {
        $certif = Certificate::all();
        return view('user.layanan.kalibrasi', compact('certif'));
    }

    function storeKalibrasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npwp' => 'required|string|max:100',
            'npwp_address' => 'required|string|max:255',
            'fax' => 'required|string|max:100',
            'tool_name' => 'required|string|max:100',
            'tool_spec' => 'required|string|max:100',
            'tool_brand' => 'required|string|max:100',
            'tool_type' => 'required|string|max:100',
            'tool_no' => 'required|string|max:100',
            'tool_amount' => 'required|string|max:100',
            'certif_cp' => 'required|string|max:100',
            'cal_range' => 'required|string|max:100',
            'certif_name' => 'required|string|max:100',
            'certif_no' => 'required|string|max:100',
            'certif_address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $validatedData = $validator->validated();

        if (Auth::check()) {
            $validatedData['user_id'] = Auth::user()->id;
        } else {
            return redirect()->route('login')->with('error', 'Anda harus masuk untuk mengajukan permintaan.');
        }

        DB::beginTransaction();

        try {
            Kalibrasi::create($validatedData);
            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Permintaan Toll berhasil ditambahkan!'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
