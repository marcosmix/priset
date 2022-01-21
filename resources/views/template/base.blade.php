<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
    <link href="{{asset('css/global.css')}}" rel="stylesheet">
</head>

<body>
    <x-header variable="Valor de prueba"/>
    
    @yield('content')


    <x-footer />
    

    @yield('script')
</body>
</html>