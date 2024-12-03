<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link para o arquivo CSS na pasta public -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('login') }}">Login</a>
            <a class="navbar-brand" href="{{ route('profiles') }}">Visitar Perfis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <!-- Substituindo Home por Profiles -->
                        <a class="nav-link active" aria-current="page" href="{{ route('profile') }}">Atualizar Perfil</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    @if (Auth::check())
                        <span class="navbar-text">
                            Olá, {{ Auth::user()->name }}
                        </span>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
