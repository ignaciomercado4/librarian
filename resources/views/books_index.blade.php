<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian - Index</title>
</head>
<body>
    @forelse($books as $book)
        <h1>Title: {{$book->title}}</h1>
        <h3>description: {{$book->description}}</h3>
        <h3>author: {{$book->author}}</h3>
        <h3>genre: {{$book->genre}}</h3>
        <h3>rating: {{$book->rating}}</h3>
    @empty
        <h1>No books stored</h1>
    @endforelse
</body>
</html>