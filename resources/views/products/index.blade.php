<h1>Daftar Produk</h1>
<a href="/products/create">Tambah</a>
@if (session('success'))
    <div style="color:green;">
        {{ session('success') }}
    </div>
@endif
@foreach($products as $p)
    <p>
        {{ $p->nama }} - Rp{{ $p->harga }}
        <a href="/products/{{ $p->id }}/edit">Edit</a>

        <form action="/products/{{ $p->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </p>
@endforeach