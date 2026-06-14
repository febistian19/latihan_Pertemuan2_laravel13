<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>task page</title>
</head>

<body>
    <h1>Task Page</h1>
    <p>Ini adalah halaman task.</p>
    <p>Nama Task: {{ $namaTask ?? 'Tidak ada nama task' }} </p>

    

    <a href="{{ route('tasks.create') }}" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
        create data
    </a>