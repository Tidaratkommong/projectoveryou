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

    <!-- Search Widget -->
    <div class="container products">

    <!-- Search form -->
    <form action="/searchproduct" method="GET" role="search">
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
    </div>
    <!--End  Search Widget -->
    <br />

    <!--product -->
    <h5>สินค้าทั้งหมด</h5>
    <main>
        <div class="container products">
            <div class="row">
                @foreach($product as $value)
                <a href="{{ route('shop.show',$value->id )}}">
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{asset($value->product_img )}}" width="250" height="260">
                            <div class="caption">
                                <h4 class=" text-dark">{{ $value->product_name }}</h4>
                                <p class=" text-dark">{{ str_limit(strtolower($value->product_detail), 50) }}</p>
                                <p class=" text-dark"><strong>ราคา : </strong> {{ $value->product_price }} $</p>
                                <p class="btn-holder"><a class="btn btn-warning btn-block text-center" role="button"></a> </p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </div><!-- End row -->
        </div>
    </main>
    <br>
</div>
<div>

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



    <!-- Scroll To Top -->
    <script>
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <div class="text-center button-container">
        <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-outline-secondary">
            <i class="fa fa-angle-double-up" aria-hidden="true">
                กลับสู่ด้านบน
            </i>
        </button>
    </div>
    <!-- Scroll To Top -->

    <br />
    <br />
    <ul class="nav justify-content-center bg-dark fixed-bottom ">
        <li class="nav-item">
            <a class="btn btn-link" href="#"></a>
        </li>
        <br />

    </ul>






    @endsection