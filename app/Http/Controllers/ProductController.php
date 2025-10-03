<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function getProduct()
    {
        $products = Product::all();

        $data = $products->map(function ($item, $index) {
            return [
                'id' => $item->id,
                'no' => $index + 1,
                'name' => $item->prod_name,
                'bets_size' => $item->prod_bets_size,
                'ed_product' => $item->prod_exp_yr,
                'package' => $item->prod_package,
                'image' => $item->prod_img,
                'status' => $item->prod_is_active,
            ];
        });

        return response()->json([
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prod_name' => 'required|string|max:100',
            'prod_bets_size' => 'required|string|max:100',
            'prod_exp_yr' => 'required|string|max:100',
            'prod_package' => 'required|string|max:100',
            'prod_img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'prod_is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $img = $request->file('prod_img');
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('images/product'), $img_name);

            Product::create([
                'prod_name' => $request->prod_name,
                'prod_bets_size' => $request->prod_bets_size,
                'prod_exp_yr' => $request->prod_exp_yr,
                'prod_package' => $request->prod_package,
                'prod_img' => $img_name,
                'prod_is_active' => $request->has('prod_is_active') ? '1' : '0',
            ]);

            return response()->json([
                'success' => 'Perusahaan berhasil ditambahkan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function edit(Product $product)
    {
        return view('admin.product.update', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'prod_name' => 'required|string|max:255',
            'prod_bets_size' => 'required|integer',
            'prod_exp_yr' => 'required|string|max:255',
            'prod_package' => 'required|string|max:255',
            'prod_img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'prod_is_active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        if ($request->hasFile('prod_img')) {
            $img = $request->file('prod_img');
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('images/product'), $img_name);
            $product->prod_img = $img_name;
        }

        try {
            $product->prod_name = $request->prod_name;
            $product->prod_bets_size = $request->prod_bets_size;
            $product->prod_exp_yr = $request->prod_exp_yr;
            $product->prod_package = $request->prod_package;
            $product->prod_is_active = $request->prod_is_active ?? false;
            $product->save();

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

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
