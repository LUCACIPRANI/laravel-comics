<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title') | Digital comics</title>
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')

        @yield('content2')

    </main>

    @include('partials.footer')
</body>
</html>