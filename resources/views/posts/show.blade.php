<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>



<body>

    <x-header></x-header>

    <div class="container m-auto mt-3">

        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post['title'] }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post['content'] }}</p>
        </a>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            <a href="{{ route('posts.index') }}">Back to All Posts</a>
        </button>

    </div>




</body>

</html>