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
                <img src="promo2.jpg" width="270" height="350" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="promo3.jpg" width="270" height="350" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="promo1.jpg" width="270" height="350" class="d-block w-100" alt="...">
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
    <div class="breadcrumb"><h5><a href="{{url('/homeproduct')}}">สินค้าทั้งหมด</a></h5>
        <main>
           
            <div class="page-overlay-bg">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid-->
                    <div class="row no-gutters px-0">
                        <!--row-->
                        @guest

                        @foreach($product as $value)
                        
                        <div class="products text-center">
                        @foreach($product as $value)
                            <div class="product">
                                <a href="#"><img src="{{asset($value->product_img )}}" alt="product"></a>
                                <a href="#"><div class="product-name">{{ $value->product_name }}</div></a>
                                <div class="product-price">{{ $value->product_price }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                       
                       
                       @endguest
                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->

            </div><!-- page-main-->
        </main>
    </div> 
    
    
    
</div>

<!-- chatbot-->

<!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800" rel="stylesheet">      
        <style>
            html, body {
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
  
    <link rel="stylesheet" type="text/css" >
    <script>
	    var botmanWidget = {
	        aboutText: 'ssdsd',
            title: 'Over You 99',
            mainColor: '#F28240',
            bubbleBackground: '#F28240',
            introMessage: '✋สวัสดีค่ะ นี่เป็นข้อความอัตโนมัติ มีอะไรให้เราช่วยไหมคะ ถ้าต้องการเริ่มต้นใหม่ พิมพ์คำว่า "เริ่มใหม่" ได้ตลอดเวลา ',
            placeholderText: 'Ask Me Something',
            aboutLink: 'mhdevelopment.gr'
            
	    };
    </script> 
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>


  <!-- endchatbot --> 

  
<br/>
<br/>

<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br/>
    
</ul>






@endsection