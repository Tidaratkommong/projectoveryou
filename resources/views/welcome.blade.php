@extends('layouts.test')

@section('content')
<div class="container ">
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
    <h5><a href="#" class="text-dark"> สินค้าแนะนำ </a></h5>
    <br>
    <main>
        <div class="container products">
            <div class="row">
                @foreach($product as $value)
                <a href="{{ route('login') }}">
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset($value->product_img )}}" width="250" height="260">
                            <div class="caption">
                                <h4 class=" text-dark">{{ $value->product_name }}</h4>
                                <p class=" text-dark">{{ str_limit(strtolower($value->product_detail), 50) }}</p>
                                <p class=" text-dark"><strong>ราคา : </strong> {{ $value->product_price }} $</p>
                                <p class="btn-holder"><a class="btn btn-warning btn-block text-center" role="button"> </a> </p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </div><!-- End row -->

        </div>
    </main>

</div>

<!-- end products -->


<!-- chatbot-->

<!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

<script>
    ! function(e, t, a) {
        var c = e.head || e.getElementsByTagName("head")[0],
            n = e.createElement("script");
        n.async = !0, n.defer = !0, n.type = "text/javascript", n.src = t + "/static/js/chat_widget.js?config=" + JSON.stringify(a), c.appendChild(n)
    }(document, "https://app.engati.com", {
        bot_key: "00208c9fb9574ea5",
        welcome_msg: true,
        branding_key: "default",
        server: "https://app.engati.com",
        e: "p"
    });
</script>

<!-- endchatbot -->

@include('review.review') 

<!-- related product area start-->


<br />
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />
</ul>

@endsection