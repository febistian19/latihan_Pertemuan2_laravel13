{{-- resources/views/layouts/app.blade.php --}}
{{-- File ini adalah kerangka yang dipakai SEMUA halaman --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TaskFlow') — TaskFlow</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen">
    {{-- NAVBAR — ditulis SEKALI di sini, muncul di semua halaman --}}
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-screen-xl mx-auto px-4 flex items-center h-14">
            <a href="{{ route('dashboard') }}" class="font-semibold text-blue-600 text-lg">TaskFlow</a>
            {{-- Link navigasi --}}
            <a href="{{ route('dashboard') }}" class="ml-6 text-sm text-gray-600 hover:text-blue-600">Dashboard</a>
            <a href="{{ route('about') }}" class="ml-6 text-sm text-gray-600 hover:text-blue-600">About ME</a>
            <a href="{{ route('contact') }}" class="ml-6 text-sm text-gray-600 hover:text-blue-600">Contact</a>
            <a href="{{ route('tasks.index') }}" class="ml-6 text-sm text-gray-600 hover:text-blue-600">Tasks</a>
        </div>
    </nav>
    {{-- KONTEN — setiap halaman anak mengisi bagian ini --}}
    <main class="max-w-screen-xl mx-auto px-4 py-6">
        @yield('content')
    </main>
</body>

</html>
