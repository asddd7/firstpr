@extends('admin.layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-5">Dashboard Admin 👑</h1>

<!-- STATS -->
<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-5 rounded shadow">
        <p>Total Produk</p>
        <h2 class="text-3xl font-bold">{{ $totalProduk }}</h2>
    </div>

    <div class="bg-green-500 text-white p-5 rounded shadow">
        <p>Status</p>
        <h2>Active</h2>
    </div>

    <div class="bg-blue-500 text-white p-5 rounded shadow">
        <p>Role</p>
        <h2>Admin</h2>
    </div>

</div>

<!-- RECENT PRODUCTS -->
<div class="bg-white mt-6 p-5 rounded shadow">

    <h2 class="font-bold mb-3">Produk Terbaru</h2>

    <ul>
        @foreach($produkBaru as $p)
            <li>{{ $p->nama }} - Rp {{ $p->harga }}</li>
        @endforeach
    </ul>

</div>

@endsection