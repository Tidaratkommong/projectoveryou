@extends('layouts.test')

@section('content')

<!-- Login access-->
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
    <!-- ads  -->
    <div class="form-row justify-content-center">
        <div class="form-group col-md-3">
            <div class="small-box  text-center " style="background-color: #996699;">
                <div class="inner">
                    <br>
                    <a href="{{url('/shop')}}">
                        <h4 class="text-light">สินค้าทั้งหมด</h4>
                    </a>
                    <h5>MUNU</h5>
                </div>
            </div>
        </div>

        <div class="form-group col-md-3">
            <div class="small-box  text-center " style="background-color: #F4A460;">
                <div class="inner">
                    <br>
                    <a href="{{ url('how-to-order') }}">

                        <h4 class="text-light">วิธีการซื้อสินค้า</h4>
                    </a>
                    <h5>HOW TO SHOP</h5>
                </div>
            </div>
        </div>

        <div class="form-group col-md-3">
            <div class="small-box  text-center " style="background-color: #5F9EA0;">
                <div class="inner">
                    <br>
                    <a href="{{ url('how-to-return') }}">
                        <h4 class="text-light"> เคลมสินค้า</h4>
                    </a>
                    <h5> CLAIM PRODUCT</h5>
                </div>
            </div>
        </div>

        <div class="form-group col-md-3">
            <div class="small-box  text-center " style="background-color: #FF9933;">
                <div class="inner">
                    <br>
                    <a href="{{ url('about') }}">
                        <h4 class="text-light">ติดต่อสอบถาม</h4>
                    </a>
                    <h5>CONTACTS</h5>
                </div>
            </div>
        </div>

    </div>
    <!-- end ads -->
    <div class="container-fluid m-0 p-0">
        <!--container-fluid-->
        <div class="row no-gutters px-1">
            <!--row-->
            @foreach($product as $value)
            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                <a href="{{ route('shop.show',$value->id )}}">
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
                                    @endif
                                </strong>
                            </h5>
                        </div>
                        <div class="price text-dark">
                            <h6>{{ str_limit(strtolower($value->product_detail), 50) }}</h6>
                        </div>
                        <div class="discount_price text-dark"><strong>ราคา : </strong> {{ $value->product_price }} บาท</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <!--row-->
    </div>
    <!--container-fluid-->
    <br />

    <div class="text-center button-container">
        <a href="{{url('/shop')}}" class="button"><button type="button" class="btn btn-outline-secondary">View more products</button></a>
    </div>
</div>

<!-- chatbot-->
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

<br />
<br />

<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>

@endsection