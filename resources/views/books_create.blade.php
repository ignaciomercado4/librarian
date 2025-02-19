<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian - Create book</title>
</head>
<body>
    <form action="{{ route('books/store') }}" method="POST">
        @csrf
        <input type="text" name="title" id="title-input" placeholder="title">
        <input type="text" name="description" id="description-input" placeholder="description">
        <input type="text" name="author" id="author-input" placeholder="author">
        <input type="text" name="genre" id="genre-input" placeholder="genre">
        <input type="number" name="rating" id="rating-input" placeholder="rating">
        
        <button type="submit">submit</button>
    </form>
</body>
</html>