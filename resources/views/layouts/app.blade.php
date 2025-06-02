<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
</head>
<body class="relative bg-[url('/images/fundo-painel-solar.jpg')] bg-cover bg-center min-h-screen backdrop-blur-xs">

    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Conteúdo do site acima do overlay -->
    <div class="relative z-10">
        @include('partials.navbar')

        <main>
            @yield('content')
        </main>
    </div>

</body>

</html>