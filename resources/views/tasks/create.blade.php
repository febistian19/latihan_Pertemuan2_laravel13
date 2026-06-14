@extends('layouts.app')
@section('content')
    <h1>Form Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="text" id="title" name="title" placeholder="Judul Tugas"
               style="border: 1px solid #ccc; padding: 5px;">

        <button type="submit">Update Task</button>
    </form>
@endsection
