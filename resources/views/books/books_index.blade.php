<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian - Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Library Collection</h1>

        @forelse($books as $book)
        <div class="bg-white p-6 rounded-lg shadow-md mb-4 relative">
            <h2 class="text-2xl font-semibold text-gray-900">{{ $book->title }}</h2>
            <p class="text-gray-700 mt-2"><span class="font-semibold">Description:</span> {{ $book->description }}</p>
            <p class="text-gray-700 mt-1"><span class="font-semibold">Author:</span> {{ $book->author }}</p>
            <p class="text-gray-700 mt-1"><span class="font-semibold">Genre:</span> {{ $book->genre }}</p>
            <p class="text-gray-700 mt-1"><span class="font-semibold">Rating:</span> {{ $book->rating }}</p>

            <div class="mt-4 flex space-x-4">
                <button onclick="openModal('editModal-{{ $book->id }}')" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
                <button onclick="openModal('deleteModal-{{ $book->id }}')" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
            </div>
        </div>

        <!-- Edit Modal -->
        <div id="editModal-{{ $book->id }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-bold mb-4">Edit Book</h2>
                <form action="{{ route('books/update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="title" value="{{ $book->title }}" class="w-full p-2 border rounded mb-2">
                    <input type="text" name="description" value="{{ $book->description }}" class="w-full p-2 border rounded mb-2">
                    <input type="text" name="author" value="{{ $book->author }}" class="w-full p-2 border rounded mb-2"><select name="genre" id="genre-select"
                        class="w-full p-2 border rounded mb-2">
                        <option value="Fiction">Fiction</option>
                        <option value="Mystery & Thriller">Mystery & Thriller</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Science Fiction">Science Fiction</option>
                        <option value="Romance">Romance</option>
                        <option value="Horror">Horror</option>
                        <option value="Historical Fiction">Historical Fiction</option>
                        <option value="Young Adult (YA)">Young Adult (YA)</option>
                        <option value="Dystopian">Dystopian</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Literary Fiction">Literary Fiction</option>
                        <option value="Crime & Detective">Crime & Detective</option>
                        <option value="Biography & Memoir">Biography & Memoir</option>
                        <option value="Self-Help">Self-Help</option>
                        <option value="Philosophy">Philosophy</option>
                        <option value="Psychology">Psychology</option>
                        <option value="Poetry">Poetry</option>
                        <option value="Graphic Novels & Comics">Graphic Novels & Comics</option>
                        <option value="Non-Fiction (General)">Non-Fiction (General)</option>
                        <option value="Classics">Classics</option>
                    </select>
                    <input type="number" name="rating" value="{{ $book->rating }}" class="w-full p-2 border rounded mb-2">
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="closeModal('editModal-{{ $book->id }}')" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Modal -->
        <div id="deleteModal-{{ $book->id }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-bold mb-4">Delete Book</h2>
                <p>Are you sure you want to delete <strong>{{ $book->title }}</strong>?</p>
                <form action="{{ route('books/delete', $book->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="closeModal('deleteModal-{{ $book->id }}')" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                    </div>
                </form>
            </div>
        </div>

        @empty
        <div class="text-center bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl text-gray-800">No books stored</h2>
        </div>
        @endforelse
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
</body>

</html>