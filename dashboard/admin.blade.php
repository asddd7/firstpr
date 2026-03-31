@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold">Admin Dashboard 👑</h1>

<div class="grid grid-cols-3 gap-4 mt-5">

    <div class="bg-white p-5 rounded shadow">
        <p>Total Produk</p>
        <h2 class="text-3xl font-bold">{{ $totalProduk }}</h2>
    </div>

    <div class="bg-green-500 text-white p-5 rounded shadow">
        <p>Status</p>
        <h2>Admin Mode</h2>
    </div>

</div>

@endsection