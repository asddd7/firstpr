@extends('admin.layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-5">Manajemen Produk</h1>

<a href="/admin/products/create" class="bg-blue-500 text-white px-4 py-2 rounded">
    + Tambah Produk
</a>

<div class="mt-5 bg-white shadow rounded">

<table class="w-full">
<tr class="bg-gray-200">
    <th>Nama</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

@foreach($products as $p)
<tr class="border-b">
    <td class="p-3">{{ $p->nama }}</td>
    <td>Rp {{ $p->harga }}</td>
    <td>
        <a href="/admin/products/{{ $p->id }}/edit">Edit</a>
    </td>
</tr>
@endforeach

</table>

</div>

@endsection