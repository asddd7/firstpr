<h1>Tambah Produk</h1>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/products">
@csrf
<input type="text" name="nama" placeholder="Nama"><br>
<input type="number" name="harga" placeholder="Harga"><br>
<textarea name="deskripsi"></textarea><br>
<button type="submit">Simpan</button>
</form>