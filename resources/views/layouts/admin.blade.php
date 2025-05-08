<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard - TravelToKomodo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-white shadow p-4">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2">
            <h1 class="text-xl font-bold">Travel To Komodo Admin</h1>
        </a>
    </header>

    <main class="container mx-auto p-4 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white shadow p-4">
        <p class="text-center text-gray-600">&copy; 2025 Travel To Komodo. All rights reserved.</p>
    </footer>
</body>

</html>
