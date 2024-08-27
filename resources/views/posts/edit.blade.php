<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <x-header></x-header>


    <div class="container m-auto">

        <h1 class="text-center fs-5 mt-3">Edit Post</h1>

        <form action="{{ route('posts.update', $id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="title" id="title" value="{{ $post['title'] }}" required>
            <br>
            <label for="content">Content:</label>
            <textarea class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="content" id="content" required>{{ $post['content'] }}</textarea>
            <br>
            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Update</button>
        </form>
    </div>
</body>

</html>