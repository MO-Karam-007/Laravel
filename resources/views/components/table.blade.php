<div class="md:container md:mx-auto md:my-8 ">

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Posted by
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="text-white px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $post['id'] }}
                    </th>
                    <td class="px-6 py-4 text-white">
                        {{$post['title']}}

                    </td>
                    <td class="px-6 py-4 text-white">
                        {{ $post['author'] }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        {{ $post['created_at']}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url('/post/'.$post['id']) }}">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Show</button>
                        </a>
                        <form class="inline " action="{{ route('post.remove', $post['id']) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>

                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Update</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>