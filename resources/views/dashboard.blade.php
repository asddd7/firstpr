@extends('layouts.app')

@section('content')

<!-- STAT CARDS -->
<div class="grid grid-cols-3 gap-4 mb-6">

    <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-gray-500">Total Produk</p>
        <h2 class="text-3xl font-bold">{{ $totalProduk }}</h2>
    </div>

    <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-gray-500">Rata-rata Harga</p>
        <h2 class="text-3xl font-bold">
            Rp {{ number_format($avgHarga,0,',','.') }}
        </h2>
    </div>

    <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-5 rounded-xl shadow">
        <p>Status Sistem</p>
        <h2 class="text-2xl font-bold">Active 🚀</h2>
    </div>

</div>

<!-- CHART -->
<div class="bg-white p-5 rounded-xl shadow">
    <h2 class="text-lg font-bold mb-4">Produk 7 Hari Terakhir</h2>

    <canvas id="chartProduk"></canvas>
</div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('chartProduk');

const data = {
    labels: {!! json_encode($produkPerHari->pluck('date')) !!},
    datasets: [{
        label: 'Produk',
        data: {!! json_encode($produkPerHari->pluck('total')) !!},
        borderWidth: 2,
        fill: true
    }]
};

new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        }
    }
});
</script>