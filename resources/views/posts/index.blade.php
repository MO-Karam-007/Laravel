<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <x-header></x-header>


    <div class="container justify-center m-auto">
        @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
        @endif

        <div class=" m-5 bg-lime-800 rounded	w-25">
            <h1 class="text-red-400 text-center text-lg "><a class="" href="{{ route('posts.create') }}">Create New blog</a></h1>
        </div>



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            content
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ations
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $id => $post)

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-green-200 whitespace-nowrap dark:text-green underline">
                            <a href="{{ route('posts.show', $id) }}">{{ $post['title'] }}</a>

                        </th>
                        <td class="px-6 py-4 ">
                            {{ $post['content'] }}
                        </td>

                        <td class="px-6 py-4">
                            <button class="me-4 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full"><a href="{{ route('posts.edit', $id) }}">Edit</a></button>
                            <form action="{{ route('posts.destroy', $id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

                <!-- @dump($posts) -->
            </table>
        </div>





    </div>
    <x-pagination></x-pagination>
</body>

</html>