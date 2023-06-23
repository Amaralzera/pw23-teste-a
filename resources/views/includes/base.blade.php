<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("css/style.css") }}">
</head>
<body>

    <marquee behavior="" direction=""> <h1>ASMEI</h1>
        <div>
            <ul>
                <li><a href="{{ route('home')}}">casa do Farrapos DO FARRAPAO</a></li>
                <li><a href="{{route ('produtos')}}">Produtos</a></li>
            </ul>
        </div></marquee>
        @yield('content')
</body>
</html>
