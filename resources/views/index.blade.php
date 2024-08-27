<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <x-header></x-header>
    <!-- Success Message -->
    @if(session('success'))
    <div class="bg-green-500 text-white font-bold p-2 rounded my-4">
        {{ session('success') }}
    </div>
    @endif

    <x-table :posts="$posts"></x-table>

    <x-pagination></x-pagination>

</body>

</html>