<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard', [
            'totalProduk' => Product::count(),
            'produkBaru' => Product::latest()->take(5)->get()
        ]);
    }
}
