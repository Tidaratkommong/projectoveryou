<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Overyou 99</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <div class="main_content">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">

                <div class="container-fluid my-2">
                    <a class="navbar-brand" href="{{ url('/') }}"> Overyou 99</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"> </span>
                    </button>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <h2 class="nav-link">|</h2>
                        </li>
                        <li class="nav-item active">
                            <a class="navbar-brand my-2" href="{{ url('/') }}"> หน้าหลัก </a>
                        </li>


                    </ul>

                </div>
            </nav>
            <main class="py-10">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>