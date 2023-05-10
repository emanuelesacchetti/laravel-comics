@vite('resources/js/app.js')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titolo-pagina')</title>
</head>
<body>
    @include('Partials.header')

    <main>
        @yield('content') 
    </main>

    @include('Partials.footer')
</body>
</html>