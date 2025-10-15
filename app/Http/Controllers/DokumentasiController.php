<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DokumentasiController extends Controller
{
    public function index()
    {
        return view('admin.dokumentasi.index');
    }

    public function getDok()
    {
        $dok = Dokumentasi::all();

        $data = $dok->map(function ($item, $index) {
            return [
                'id' => $item->id,
                'no' => $index + 1,
                'judul' => $item->title,
                'gambar' => $item->image,
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
            'title' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $img = $request->file('image');
            $img_name = 'images/portofolio/' . time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('images/portofolio'), $img_name);

            Dokumentasi::create([
                'title' => $request->title,
                'image' => $img_name,
                'is_active' => $request->has('is_active') ? '1' : '0',
            ]);

            return response()->json([
                'message' => 'Dokumentasi berhasil ditambahkan',
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
        $dok = Dokumentasi::find($id);
        return view('admin.dokumentasi.update', compact('dok'));
    }

    public function update(Request $request, Dokumentasi $dok)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img_name = 'images/portofolio/' . time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('images/portofolio'), $img_name);
            $dok->image = $img_name;
        }

        try {
            $dok->title = $request->title;
            $dok->is_active = $request->is_active ?? false;
            $dok->save();

            return response()->json([
                'success' => 'Dokumentasi berhasil diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
