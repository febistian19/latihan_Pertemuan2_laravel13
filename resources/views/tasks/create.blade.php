@extends('layouts.app')
@section('content')
    <h1>Form Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div style="margin-bottom:10px;">
            <input type="text" id="title" name="title" placeholder="Judul Tugas"
                style="border: 1px solid #ccc; padding: 5px; width: 300px; display:block;">
        </div>

        <div style="margin-bottom:10px;">
            <textarea id="description" name="description" placeholder="Deskripsi Tugas"
                style="border: 1px solid #ccc; padding: 5px; width: 300px; display:block;"></textarea>
        </div>

        <button type="submit"
            style="background-color: #4CAF50; color: white; padding:8px 12px; border:none; border-radius:4px; cursor:pointer;">
            Update Task
        </button>
    </form>
@endsection
