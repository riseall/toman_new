<?php

namespace App\Http\Controllers;

use App\Models\FasilitasProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = FasilitasProduksi::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function getFasilitas()
    {
        $fasilitas = FasilitasProduksi::all();

        $data = $fasilitas->map(function ($item, $index) {
            return [
                'id' => $item->id,
                'no' => $index + 1,
                'name' => $item->dosage_form,
                'jenis' => $item->type,
                'unit' => $item->unit,
                'status' => $item->is_active,
            ];
        });

        return response()->json([
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dosage_form' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'unit' => 'required|in:Tablet,Capsule,Vial,Bottle,Ampoule,Tube',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        foreach ($validator as $key => $value) {
            if (is_string($value)) {
                $validator[$key] = e($value);
            }
        }

        try {
            FasilitasProduksi::create([
                'dosage_form' => $request->dosage_form,
                'type' => $request->type,
                'unit' => $request->unit,
                'is_active' => $request->has('is_active') ? '1' : '0',
            ]);

            return response()->json([
                'success' => 'Fasilitas berhasil ditambahkan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function edit($id)
    {
        $fasilitas = FasilitasProduksi::find($id);
        return view('admin.fasilitas.update', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'dosage_form' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'unit' => 'required|in:Tablet,Capsule,Vial,Bottle,Ampoule,Tube',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        foreach ($validator as $key => $value) {
            if (is_string($value)) {
                $validator[$key] = e($value);
            }
        }

        $fasilitas = FasilitasProduksi::find($id);

        try {
            $fasilitas->update([
                'dosage_form' => $request->dosage_form,
                'type' => $request->type,
                'unit' => $request->unit,
                'is_active' => $request->is_active ?? false,
            ]);

            return response()->json([
                'success' => 'Produk berhasil diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
