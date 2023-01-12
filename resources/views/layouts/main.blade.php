<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="container">
<ul>
    <li><a href="{{ route('post.index') }}"> Posts </a></li>
    @can('view', auth()->user())
    <li><a href="{{ route('post.create') }}"> Create post</a></li>
    @endcan
</ul>
    @yield('content')

</body>
</html>
