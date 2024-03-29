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

    <!-- Search form -->
    <form action="/search" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group md-form form-sm form-2 pl-0">
            <input class="form-control my-0 py-1 red-border" type="text" class="form-control" placeholder="ค้นหาสินค้าที่คุณต้องการ" name="search" style=" height:3rem;">
            <span class="input-group-append">
                <button class="input-group-text red lighten-3" type="submit" style="background-color: #FA8072; height:3rem;">
                    <i class="fas fa-search text-grey" aria-hidden="true"></i>
                </button>
            </span>
        </div>
    </form>

    <!-- End Search form -->
    <br />

    <!--product -->
    <h5><a href="#" class="text-dark"> สินค้าแนะนำ </a></h5>
    <br>


    <div class="container-fluid m-0 p-0">
        <!--container-fluid-->
        <div class="row no-gutters px-1">
            <!--row-->
            @foreach($product as $value)
            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                <a href="{{ route('login') }}">
                    <div class="bg-warning pic_preview">
                        <img src="{{asset($value->product_img )}}" width="250" height="260">
                    </div>
                    
                    <div class="bg-white mb-5 shadow-sm">

                        <div class=" text-dark">
                            <h5><strong>{{ $value->product_name }}
                                    @if($value->product_method=='new')
                                    <span class="badge badge-danger">{{$value->product_method}}</span>
                                    @elseif($value->product_method=='sale')
                                    <span class="badge badge-success">{{$value->product_method}}</span>
                                    @elseif($value->product_method=='hot')
                                    <span class="badge badge-warning">{{$value->product_method}}</span>
                                    @endif</strong></h5>
                        </div>

                        <div class="price text-dark">
                            <h6>{{ str_limit(strtolower($value->product_detail), 50) }}</h6>
                        </div>

                        <div class="discount_price text-dark"><strong>ราคา : </strong>
                            {{ $value->product_price }} บาท
                        </div>

                    </div>
                </a>
            </div>
            @endforeach


        </div>
        <!--row-->
    </div>
    <!--container-fluid-->

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