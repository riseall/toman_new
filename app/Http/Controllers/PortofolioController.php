<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortofolioController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $porto = Portofolio::where('is_active', 1)->paginate(2, ['*'], 'page', $page);
        $dokumentasi = Dokumentasi::where('is_active', 1)->get();
        return view('user.portofolio.porto', compact('porto', 'dokumentasi'));
    }

    public function admIndex()
    {
        $porto = Portofolio::all();
        return view('admin.portofolio.index', compact('porto'));
    }

    public function getPorto()
    {
        $porto = Portofolio::all();

        $data = $porto->map(function ($item, $index) {
            return [
                'id' => $item->id,
                'no' => $index + 1,
                'judul' => $item->title,
                'deskripsi' => $item->desc,
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
            'desc' => 'required|string|max:255',
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

            Portofolio::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'image' => $img_name,
                'is_active' => $request->has('is_active') ? '1' : '0',
            ]);

            return response()->json([
                'message' => 'Portofolio berhasil ditambahkan',
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
        $porto = Portofolio::find($id);
        return view('admin.portofolio.update', compact('porto'));
    }

    public function update(Request $request, Portofolio $porto)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'desc' => 'required|string|max:255',
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
            $porto->image = $img_name;
        }

        try {
            $porto->title = $request->title;
            $porto->desc = $request->desc;
            $porto->is_active = $request->is_active ?? false;
            $porto->save();

            return response()->json([
                'success' => 'Portofolio berhasil diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Portofolio $porto)
    {
        try {
            $porto->delete();
            return response()->json([
                'success' => 'Portofolio berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
