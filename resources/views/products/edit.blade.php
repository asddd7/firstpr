<h1>Edit Produk</h1>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/products/{{ $product->id }}">
@csrf
@method('PUT')

<input type="text" name="nama" value="{{ old('nama', $product->nama) }}">
<input type="number" name="harga" value="{{ old('harga', $product->harga) }}">
<textarea name="deskripsi">{{ old('deskripsi', $product->deskripsi) }}</textarea>

<button type="submit">Update</button>
</form>