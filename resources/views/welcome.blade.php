@extends('layouts.test')

@section('content')

<div class="container">
    <!-- promotion -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="promo2.jpg" width="270" height="300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="promo3.jpg" width="270" height="300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="promo1.jpg" width="270" height="300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <br />
    <!--product -->
    <div class="breadcrumb">กางเกง
        <main>
            @yield('content')
            <div class="page-overlay-bg">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid-->
                    <div class="row no-gutters px-0">
                        <!--row-->
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                                <a href="javascript:void(0);">
                                    <div class="card mb-2 shadow-sm" style="width: 18rem; height:17rem;">
                                        <img src="p1.jpg" class="card-img-top" alt="...">
                                        <div>หัวเรื่องรายการทดสอบ This is test title</div>
                                        <div class="price text-danger">฿1,500</div>
                                        <div class="discount_price text-danger">฿2,500 <span>-50%</span></div>

                                    </div>

                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->

            </div><!-- page-main-->
        </main>
    </div>
    <!--product -->
    <div class="breadcrumb">นาฬิกา
        <main>
            @yield('content')

            <div class="page-overlay-bg">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid-->
                    <div class="row no-gutters px-0">
                        <!--row-->
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                                <a href="javascript:void(0);">
                                    <div class="card mb-2 shadow-sm" style="width: 18rem; height:22rem;">
                                        <img src="p2.jpg" class="card-img-top" alt="...">
                                        <div></div>
                                        <div class="price text-danger">฿1,500</div>
                                        <div class="discount_price text-danger">฿2,500 <span>-50%</span></div>

                                    </div>

                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->

            </div><!-- page-main-->

        </main>
    </div>
    <!--product -->
    <div class="breadcrumb">เสื้อ
        <main>
            @yield('content')
            <div class="page-overlay-bg">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid-->
                    <div class="row no-gutters px-0">
                        <!--row-->
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                                <a href="javascript:void(0);">
                                    <div class="card mb-2 shadow-sm" style="width: 18rem; height:17rem;">
                                        <img src="p3.jpg" class="card-img-top" alt="...">
                                        <div>หัวเรื่องรายการทดสอบ This is test title</div>
                                        <div class="price text-danger">฿1,500</div>
                                        <div class="discount_price text-danger">฿2,500 <span>-50%</span></div>

                                    </div>

                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->
            </div><!-- page-main-->
        </main>
    </div>

</div>

<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    
</ul>




<!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->




@endsection