<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <meta charset="UTF-8">
    <title>Cadastro de produtos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @component('component_navbar', [ "current" => $current ])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" type="application/javascript"></script>
</body>
</html>