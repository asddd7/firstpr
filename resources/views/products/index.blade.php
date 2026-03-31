@extends('layouts.app')

@section('content')

<a href="/products/create" class="bg-blue-500 text-white px-4 py-2 rounded">
    + Tambah Produk
</a>

<div class="mt-5 bg-white shadow rounded overflow-hidden">

<table class="w-full">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    @foreach($products as $p)
        <tr class="border-b">
            <td class="p-3">{{ $p->nama }}</td>
            <td>Rp {{ $p->harga }}</td>
            <td class="p-3">
                <a href="/products/{{ $p->id }}/edit" class="text-blue-500">Edit</a>

                <form action="/products/{{ $p->id }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

</div>

@endsection