<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div class="text-center flex justify-center py-10">
        <div class="w-2/3 border rounded border-indigo-500 py-5">
            @yield('content')
        </div>
    </div>
</body>
</html>