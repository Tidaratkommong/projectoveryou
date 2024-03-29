<!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Over You 99</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
           
        }

        body {
            background-color: #f3f5f9;
        }

        .wrapper {
            display: flex;
            position: relative;
        }

        .wrapper .sidebar {
            width: 200px;
            height: 100%;
            background: #4b4276;
            padding: 30px 0px;
            position: fixed;
        }

        .wrapper .sidebar h2 {
            color: #000000;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 40px;
        }

        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #f3f5f9;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .wrapper .sidebar ul li a {
            color: #000000;
            /* text */
            display: block;
        }

        .wrapper .sidebar ul li a .fas {
            width: 25px;
        }

        .wrapper .sidebar ul li:hover {
            background-color: #cccccc;
            /* bg-text */
        }

        .wrapper .sidebar ul li:hover a {
            color: #000000;
        }

        .wrapper .sidebar .social_media {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }

        .wrapper .sidebar .social_media a {
            display: block;
            width: 40px;
            background: #594f8d;
            height: 40px;
            line-height: 45px;
            text-align: center;
            margin: 0 5px;
            color: #bdb8d7;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .wrapper .main_content {
            width: 100%;
            margin-left: 200px;
        }

        .wrapper .main_content .header {
            padding: 20px;
            background: #fff;
            color: #717171;
            border-bottom: 1px solid #e0e4e8;
        }

        .wrapper .main_content .info {
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .wrapper .main_content .info div {
            margin-bottom: 20px;
        }

        @media (max-height: 500px) {
            .social_media {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <div class="sidebar card bg-white">
            <li>
                <div class=" pt-0 text-center">

                    <a href="https://www.picz.in.th/image/OEEnav"> <img src="https://sv1.picz.in.th/images/2020/09/20/OEEnav.jpg" class="rounded-circle" style="width:75px;height:75px;"></a>
                    <br />
                    <br />
                    <h6 class="card-title">{{ Auth::user()->name }}</h6>
                </div>
            </li>
            <ul>

                <li><a href="{{url('adminhome')}}"><i class="fas fa-home"></i> หน้าหลัก</a></li>
                <li><a href="{{url('admin/index_user')}}"><i class="fas fa-address-card"></i> จัดการข้อมูลผู้ใช้</a></li>
                <li><a href="{{url('product/product')}}"><i class="fa fa-database"></i>  จัดการข้อมูลสินค้า</a></li>
                <li><a  href="{{ route('seller.orders.index') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> ตรวจสอบคำสั่งซื้อ</a></li>
                <li><a href="#"><i class="fa fa-undo" aria-hidden="true"></i> ตรวจสอบการเคลมสินค้า</a></li>
                <li><a href="{{url('report')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>  สรุปยอดขายสินค้า</a></li>
                <li><a href="{{url('event')}}"><i class="fa fa-calendar" aria-hidden="true"></i>  ปฎิทินการทำงาน </a></li>

            </ul>
        </div>
        <div class=" main_content">
                        <div id="app">
                            <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm ">
                                <div class="container my-4">
                                    <a class="navbar-brand" href="{{ url('adminhome') }}"> Overyou 99
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <!-- Left Side Of Navbar -->
                                        <ul class="navbar-nav mr-auto">

                                        </ul>

                                        <!-- Right Side Of Navbar -->
                                        <div class="card-body text-right ">
                                            <!-- Authentication Links -->
                                            @guest
                                            
                                            @else
                                            <li class="nav-item dropdown ">
                                              <!-- time -->
                                                <?php
                                                $_month_name = array(
                                                    "01" => "มกราคม",  "02" => "กุมภาพันธ์",  "03" => "มีนาคม",
                                                    "04" => "เมษายน",  "05" => "พฤษภาคม",  "06" => "มิถุนายน",
                                                    "07" => "กรกฎาคม",  "08" => "สิงหาคม",  "09" => "กันยายน",
                                                    "10" => "ตุลาคม", "11" => "พฤศจิกายน",  "12" => "ธันวาคม"
                                                );

                                                $vardate = date('Y-m-d');
                                                $yy = date('Y');
                                                $mm = date('m');
                                                $dd = date('d');
                                                if ($dd < 10) {
                                                    $dd = substr($dd, 1, 2);
                                                }
                                                $date = $dd . " " . $_month_name[$mm] . "  " . $yy += 543;
                                                echo $date;
                                                ?>
                                       
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle fas fa-user text-dark "  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item fas fa-lock" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                            @endguest
                                            </div>
                                        

                                    </div>
                                </div>
                            </nav>
                            <main class="py-6">
                                @yield('content')
                            </main>
                        </div>
            
                        
        </div>
    </div>

</body>

</html>