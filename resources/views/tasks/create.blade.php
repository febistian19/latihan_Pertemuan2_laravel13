<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        
        <input type="text" name="title" placeholder="Judul Tugas">
        <button type="submit">Update Task</button>
    </form>
</body>
</html>