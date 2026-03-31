@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold">User Dashboard 👤</h1>

<div class="bg-white p-5 rounded shadow mt-5">
    <p>Jumlah Produk Tersedia:</p>
    <h2 class="text-3xl font-bold">{{ $totalProduk }}</h2>
</div>

@endsection