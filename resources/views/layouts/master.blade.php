{{--    Estructura principal HTML, se hace referencia a un archivo css y a uno js.
        Se crea un div como contenedor, dentro de ella se invoca a la barra de 
        navegacion y se crea un campo yield llamado content  --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        @include('fragments.nav-bar')
        @yield('content')     
    </div>    
</body>
</html>