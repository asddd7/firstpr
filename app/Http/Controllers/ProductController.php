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
        return view('products.create');
    }

    // simpan data
    public function store(Request $request)
    {
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
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('/products');
    }

    // hapus
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/products');
    }
}