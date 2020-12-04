<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Over You 99</title>

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
            <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

                <div class="container-fluid my-3">
                    <!--<a href="{{ url('/') }}"> <img src="https://www.img.in.th/images/2ca66c73960a89eeaa7a3407cf46eb32.th.jpg" class="img-rounded" alt="Cinque Terre" style="width:100px;height:55px;"></a>-->
                    <a class="navbar-brand" href="{{ url('/') }}"> Over You 99</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('ลงทะเบียน') }}</a>
                            </li>
                            @endif
                            @else

                            <form class="form-inline my-2 my-lg-0">
                                <a class="btn btn-outline-warning my-2 my-sm-0" type="submit" href="#"> <i class="fa fa-shopping-cart cus-icon py-1"></i></a>
                            </form>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fas fa-user text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.profile',Auth::user()->id )}}">
                                        {{ __('ดูโปรไฟล์') }}
                                    </a>

                                    <a class="dropdown-item " href="{{ route('user.edit')}}">
                                        {{ __('จัดการโปรไฟล์') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('password.edit')}}">
                                        {{ __('เปลี่ยนรหัสผ่าน') }}
                                    </a>
                                    <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-10">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>