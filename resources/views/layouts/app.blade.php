<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>List Barang</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/style.css')
</head>

<body>
                @include('layouts.navbar')
                @yield('content')
    @vite('resources/js/app.js')
</body>

</html>
