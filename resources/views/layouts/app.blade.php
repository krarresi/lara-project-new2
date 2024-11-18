<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Заявки')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    @guest
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('show_reg') }}">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('show_signin') }}">Вход</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('applications.index') }}">Мои заявки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Выход</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <main class="main py-4">
        @yield('content')
    </main>

</div>

<footer class="footer mt-auto py-3 bg-light text-center">
    <div class="container">
        <span class="text-muted">© {{ date('Y') }} Чистый дом. Все права защищены.</span>
    </div>
</footer>

<script src="/scripts/bootstrap.bundle.min.js"></script>

</body>
</html>
