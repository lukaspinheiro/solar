<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- ou o que você estiver usando -->
</head>
<body class="bg-gray-100">
    
    @include('partials.navbar') <!-- AQUI você chama a navbar -->

    <main class="py-8">
        @yield('content') <!-- Aqui carrega o conteúdo das views -->
    </main>

</body>
</html>