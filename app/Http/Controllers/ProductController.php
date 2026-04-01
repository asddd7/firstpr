<?php

namespace App\Http\Controllers;

// ⬇️ letakkan di sini (di luar class, tapi setelah namespace)
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampilkan semua
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // form tambah
    public function create()
    {
        if (!auth()->user()->can('create products')) {
            abort(403);
        }

        return view('products.create');
    }

    // simpan data
    public function store(Request $request)
    {
        if (!auth()->user()->can('create products')) {
            abort(403);
        }

        Product::create($request->all());
        return redirect('/products');
    }

    // form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3|max:100',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect('/products')->with('success', 'Produk berhasil diupdate');
    }
    
    // hapus
    public function destroy($id)
    {
        if (!auth()->user()->can('delete products')) {
            abort(403);
        }

        Product::destroy($id);
        return back();
    }
}