<!doctype html>
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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto text-center">
                        <img src="{{ url('/images/metodo.png') }}" alt="Metodo infinite">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <a href="http://theplace.com.br/">
                            <img src="{{ url('./images/logo.png') }}" alt="the place">
                        </a>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


    </div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Método Infinite. Todos os direitos reservados. - Desenvolvido por The Place
                        Sistemas...</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    <script>
        $(document).ready(function() {
            $("#phone").inputmask({
                mask: ["(99) 99999-9999", "(99) 99999-9999", ],
                keepStatic: true
            });

            $("#cnpj").inputmask({
                mask: ["99.999.999/9999-99", "99.999.999/9999-99", ],
                keepStatic: true
            });
        });

        var currentStep = 1;

        $("#submitBtn").hide();
        $("#prevBtn").hide();

        $("#nextBtn").click(function() {
            if (currentStep < 45) {
                currentStep++;
                $(".form-group").hide();
                $("#submitBtn").hide();
                $("#prevBtn").show();

                $("#step" + currentStep).closest(".form-group").show();
            }

            if (currentStep == 45) {
                $("#submitBtn").show();
                $("#prevBtn").show();
                $("#nextBtn").hide();
            }
        });

        $("#prevBtn").click(function() {
            if (currentStep > 1) {
                currentStep--;

                $(".form-group").hide();
                $("#step" + currentStep).closest(".form-group").show();

                $("#submitBtn").hide();
                $("#prevBtn").show();
                $("#nextBtn").show();
            }

            if (currentStep == 1) {
                $("#prevBtn").hide();
            }
        });

        $(".form-group").hide();
        $("#step1").closest(".form-group").show();
    </script>
</body>

</html>
