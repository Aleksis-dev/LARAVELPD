<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit book</h1>

    <form action="/books/{{ $book->id }}/update" method="post">
        @csrf
        @method('put')
        <input type="text" name="title" placeholder="title goes here" value="{{ $book->title }}">
        <input type="text" name="author" placeholder="author goes here" value="{{ $book->author }}">
        <input type="date" name="released_at" placeholder="date goes here" value="{{ $book->released_at }}">
        <input type="submit" value="Update">
    </form>
</body>
</html>