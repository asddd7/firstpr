<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Product::count();

        $avgHarga = Product::avg('harga') ?? 0;

        $produkPerHari = Product::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('count(*) as total')
        )
        ->whereDate('created_at', '>=', now()->subDays(7))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

        return view('dashboard', compact(
            'totalProduk',
            'avgHarga',
            'produkPerHari'
        ));
    }
    public function admin()
    {
        return view('dashboard.admin', [
            'totalProduk' => Product::count()
        ]);
    }

    public function user()
    {
        return view('dashboard.user', [
            'totalProduk' => Product::count()
        ]);
    }
}