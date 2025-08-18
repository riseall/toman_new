<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $data = Product::all();
        return view('admin.product.index', compact('data'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'prod_name' => 'required|string|max:255',
            'prod_bets_size' => 'required|integer',
            'prod_exp_yr' => 'required|string|max:255',
            'prod_package' => 'required|string|max:255',
        ]);

        try {
            Product::create([
                'prod_name' => $request->prod_name,
                'prod_bets_size' => $request->prod_bets_size,
                'prod_exp_yr' => $request->prod_exp_yr,
                'prod_package' => $request->prod_package,
                'prod_is_active' => $request->has('prod_is_active') ? '1' : '0',
            ]);
            return redirect()->back()->with('success', 'Produk berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create product: ' . $e->getMessage());
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'prod_name' => 'required|string|max:255',
            'prod_bets_size' => 'required|integer',
            'prod_exp_yr' => 'required|string|max:4',
            'prod_package' => 'required|string|max:255',
        ]);

        try {
            $product->update([
                'prod_name' => $request->prod_name,
                'prod_bets_size' => $request->prod_bets_size,
                'prod_exp_yr' => $request->prod_exp_yr,
                'prod_package' => $request->prod_package,
                'prod_is_active' => $request->has('prod_is_active') ? '1' : '0',
            ]);
            return redirect()->back()->with('success', 'Produk berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
