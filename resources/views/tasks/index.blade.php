@extends('layouts.app')
@section('content')
    <h1>Task Page</h1>
    <p>Ini adalah halaman task.</p>
    <br>
    <p>Nama Task: {{ $namaTask ?? 'Tidak ada nama task' }}</p>
    <p>Deskripsi: {{ $deskripsi ?? 'Tidak ada deskripsi' }}</p>

    <a href="{{ route('tasks.create') }}"
        class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 cursor-pointer">
        Create Data
    </a>
@endsection
