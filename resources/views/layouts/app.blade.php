<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>
</head>
<body class="font-sans bg-gray-100">

<header class="bg-blue-500 text-white p-5 shadow">
    <h1 class="text-3xl font-bold">Prueba Laravel</h1>
    <nav class="space-x-4">
        <a href="{{ route('register.index') }}" class="uppercase font-bold text-sm">Registro</a>
        <a href="/" class="uppercase font-bold text-sm">Inicio</a>
    </nav>
</header>

<main class="container mx-auto mt-10">
    <h2 class="font-bold text-center text-3xl mb-10">@yield('titulo')</h2>
    @yield('contenido')
</main>

    

</body>
</html>

