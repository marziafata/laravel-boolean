<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.menu')
    @yield('content')
    @include('partials.footer')
<script src="{{ asset('js/app.js')}}" charset="UTF-8"></script>
</body>
</html>
