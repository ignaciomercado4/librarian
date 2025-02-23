<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian - Create Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Add a New Book</h1>
        <form action="{{ route('books/store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="title" id="title-input" placeholder="Title"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="text" name="description" id="description-input" placeholder="Description"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="text" name="author" id="author-input" placeholder="Author"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select name="genre" id="genre-select"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
            <label for="is-finished">Have you finished reading this book?</label>
            <input type="checkbox" name="is_finished" id="is-finished-input">
            <div id="is-finished-form-group" style="display: none;">
                <input type="date" name="finished_reading_date" id="finished-reading-input" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="number" name="rating" id="rating-input" placeholder="Rating" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600 transition">Submit</button>
        </form>
    </div>

    <script>
        window.onload = function() {
            const $IS_FINISHED_INPUT = document.querySelector('#is-finished-input');
            if ($IS_FINISHED_INPUT) {
                $IS_FINISHED_INPUT.addEventListener('change', function() {
                    const $IS_FINISHED_FORM_GROUP = document.querySelector('#is-finished-form-group');

                    if ($IS_FINISHED_INPUT.checked == true) {
                        $IS_FINISHED_FORM_GROUP.style.display = 'block';
                    } else {
                        $IS_FINISHED_FORM_GROUP.style.display = 'none';
                    }
                }, false);
            }
        }
    </script>
</body>

</html>