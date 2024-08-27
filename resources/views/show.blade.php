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
    <div class="container mx-auto mt-4">
        <h1 class="text-4xl">{{ $post['title'] }}</h1>
        <p class="text-gray-600">By {{ $post['author'] }} on {{ $post['created_at'] }}</p>
    </div>
    <x-pagination></x-pagination>

</body>

</html>