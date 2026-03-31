<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex h-screen">

    <!-- SIDEBAR -->
    <div class="w-64 bg-gray-900 text-white p-5">
        <h1 class="text-xl font-bold mb-8">MyDashboard</h1>

        <ul class="space-y-4">
            <li><a href="/dashboard" class="hover:text-blue-400">Dashboard</a></li>
            <li><a href="/products" class="hover:text-blue-400">Products</a></li>
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="text-red-400">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="flex-1 p-6">

        <!-- TOP BAR -->
        <div class="flex justify-between mb-6">
            <h2 class="text-2xl font-bold">Dashboard</h2>
            <div class="text-gray-600">
                {{ auth()->user()->name }}
            </div>
        </div>

        <!-- CONTENT AREA -->
        @yield('content')

    </div>

</div>

</body>
</html>