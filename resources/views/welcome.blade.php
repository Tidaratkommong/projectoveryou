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
                <img src="o1.jpg" width="300" height="390" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="o2.jpg" width="300" height="390" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="o3.jpg" width="300" height="390" class="d-block w-100" alt="...">
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

    <!-- Search Widget -->

    <form class=" form-inline my-2 my-lg-0" action="/search" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input class="form-control mr-sm-4" type="text" class="form-control" placeholder="ค้นหาสินค้าที่คุณต้องการ" name="search" style="width: 64rem; height:3rem;">
            <span class="input-group-btn">
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" style="width: 3rem; height:3rem;"><i class="fas fa-search cus-icon py-1"></i></button>
            </span>
        </div>
    </form>
    <br />

    <!--product -->
    <h5><a href="{{url('/shop')}}" class="text-dark"> สินค้าแนะนำ </a></h5>

    <div class="breadcrumb">
        <main>
            <div class="page-overlay-bg bg-light">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid-->
                    <div class="row no-gutters px-0">
                        <!--row-->
                        @foreach($product as $value)
                        <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                            <div href="javascript:void(0);">
                                <a href="{{ route('login') }}" class="card  mb-2 shadow-sm" style="width: 16rem; height:20rem;">
                                    <img class="text-center w-100" src="{{asset($value->product_img )}}" style="width: 150px; height:250px;" />
                                    <div class=" text-dark text-center"><h5>{{ $value->product_name }}</h5></div>
                                    <div class="price text-dark text-center"><h5> ราคา : {{ $value->product_price }}<span> บาท  </h5> </span></div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->
            </div><!-- page-main-->
        </main>
    </div>
</div>
<!-- end products -->


<!-- chatbot-->

<!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800" rel="stylesheet">
<style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
</style>
</head>

<body>
</body>

<link rel="stylesheet" type="text/css">
<script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        title: 'Over You 99',
        textColor: '#FFFAFA',
        mainColor: '#2E8B57',
        bubbleBackground: '#2E8B57',
        introMessage: '✋สวัสดีค่ะ นี่เป็นข้อความอัตโนมัติ มีอะไรให้เราช่วยไหมคะ ถ้าต้องการเริ่มต้นใหม่ พิมพ์คำว่า "เริ่มใหม่" ได้ตลอดเวลา ',
        placeholderText: 'Ask Me Something',
        aboutLink: 'mhdevelopment.gr'

    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>


<!-- endchatbot -->


{{-- reviews section --}}

@include('review.review')

<!-- related product area start -->
{{-- @include('review.related-product') --}}

<br />
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>

@endsection

