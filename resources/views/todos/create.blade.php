<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Create Todo</title>
</head>
<body>
    <div class="max-w-lg mx-auto rounded overflow-hidden shadow-lg p-2 my-2 text-center">
        <h1 class="text-2xl text-indigo-500">Create A Todo</h1>
        <x-alert/>
        <form action="/todos/create" method="post" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border">
            <input type="submit" value="Create" class="p-2 border rounded bg-indigo-500 text-white">
        </form>
    </div>
</body>
</html>