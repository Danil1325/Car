<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Phone info')</title>
</head>
<body>
    <nav>
        <a href="{{route('cars.index')}}">Cars</a>
    </nav>
    @yield('content')
</body>
</html>