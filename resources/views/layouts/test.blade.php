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
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{ asset('js/bonus.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
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
            <nav class="navbar navbar-expand-md navbar-light bg-light btn btn-outline-success sticky-top  ">

                <div class="container-fluid my-3">
                    <!--<a href="{{ url('/') }}"> <img src="https://www.img.in.th/images/2ca66c73960a89eeaa7a3407cf46eb32.th.jpg" class="img-rounded" alt="Cinque Terre" style="width:100px;height:55px;"></a>-->

                    <a class="navbar-brand text-success" href="{{url('/')}}"> Over You 99</a>

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

                            <li class="nav-item">
                                <a class="btn btn-link text-dark" href="{{ url('help') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> การช่วยเหลือ</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-link text-dark" href="{{ url('about') }}"><i class="fa fa-compress" aria-hidden="true"></i> เกี่ยวกับเรา</a>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-link text-dark" href="https://www.facebook.com/overyou99">ติดตามเรา</a></blockquote>
                            </li>

                            <!--<li class="nav-item">
                                <a class="btn btn-link text-light" href="#"><i class="fa fa-comments" aria-hidden="true"></i>  Chat กับเรา</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="btn btn-link text-dark" href="{{ url('shipments') }} "> ตรวจสอบหมายเลขการสั่งซื้อ</a>
                            </li>



                            <li class="nav-item mr-2">
                                <a class="nav-link p-0 m-0" href="{{ route('cart.index') }}">
                                    <i class="fas fa-cart-arrow-down text-success fa-2x">
                                    </i>
                                    <div class="badge badge-danger">
                                        @auth
                                        {{Cart::session(auth()->id())->getContent()->count()}}
                                        @else
                                        0
                                        @endauth
                                    </div>
                                </a>
                            </li>


                            @guest
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('login') }}"> {{ __('เข้าสู่ระบบ') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('register') }}"> {{ __('ลงทะเบียน') }}</a>
                            </li>
                            @endif
                            @else
                            <!--<div class="card-body py-0">
                                <form class="form-inline ">
                                    <a class="btn btn-outline-warning" type="submit" href="#">
                                        <i class="fa fa-shopping-cart cus-icon py-1"> </i>
                                    </a>

                                </form>
                            </div>-->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fas fa-user text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

                                    <a class="dropdown-item" href="{{url('history',Auth::user()->id)}}">
                                        {{ __('ดูประวัติการซื้อ') }} 
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
            {{-- display success message --}}
            @if(session()->has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{session('message')}}
            </div>
            @endif

            {{-- display error message --}}

            @if(session()->has('error'))
            <div class="alert alert-danger text-center" role="alert">
                {{session('error')}}
            </div>
            @endif
            <main class="py-10">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>