<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'message' => 'API BERHASIL JALAN'
    ]);
});

use App\Models\Product;
use Illuminate\Http\Request;

Route::get('/products', function () {
    return Product::all();
});

Route::post('/products', function (Request $request) {
    return Product::create($request->all());
});

Route::put('/products/{id}', function (Request $request, $id) {
    $product = Product::findOrFail($id);
    $product->update($request->all());
    return $product;
});

Route::delete('/products/{id}', function ($id) {
    Product::destroy($id);
    return response()->json(['message' => 'deleted']);
});