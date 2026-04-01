<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex h-screen">

    <!-- SIDEBAR -->
    <div class="w-64 bg-gray-900 text-white p-5">
        <h1 class="text-xl font-bold mb-8">ADMIN PANEL</h1>

        <ul class="space-y-4">
            <li><a href="/admin/dashboard">Dashboard</a></li>
            <li><a href="/admin/products">Products</a></li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="flex-1 p-6">
        @yield('content')
    </div>

</div>

</body>
</html>