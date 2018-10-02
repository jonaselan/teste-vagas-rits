<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="gallery" src="{{ asset('img/rits-carreiras.png') }}" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="#about-rits">A Rits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#values-rits">Nossos valores</a>
                        </li>
                        <li class="nav-item vacancy-link">
                            <a class="nav-link" href="#vacancies-rits">Vagas abertas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <img class="gallery" src="{{ asset('img/rits-logo.png') }}" />
                    </div>
                    <div class="col-md-10 text-center font-small">
                        <span class="font-weight-bold">Rits Tecnologia. Todos os direitos reservados</span> <br/>
                        Desenvolver e evoluir soluções digitais para negócios que acreditam na tecnologia como força propulsora.
                    </div>
                    <div class="col-md-1 footer-site">
                        Rits.com.br
                    </div>
                </div>
            </div>
          </footer>
    </div>
</body>
</html>
