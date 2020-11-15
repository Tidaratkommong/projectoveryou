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
                       
                        @foreach($product as $value)
                            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                                <div href="javascript:void(0);">
                                     <div class="card  mb-2 shadow-sm" style="width: 16rem; height:27rem;">
                                    <img class="text-center w-100" src="{{asset($value->product_img )}}" style="width: 180px; height:270px;" />
                                        <div class=" text-dark text-center">ชื่อสินค้า : {{ $value->product_name }}</div>
                                        <div class="discount_price text-dark text-center"> จำนวนสินค้า : {{$value->product_num }} <span>ตัว</span> </div>
                                        <div class="price text-dark text-center"> ราคา : {{ $value->product_price }}<span> บาท </span></div>
                                        <div class="price text-dark text-center"> รายละเอียด : {{ $value->product_detail }}</div> 
                                        <div class="text-center text-danger"><button class="btn btn-outline my-1 my-sm-0 text-danger" type="submit" ><a  class=" text-danger" href="#" /> สั่งซื้อสินค้า <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button></div>
                                        <!--<div class="text-center"> <a class=" text-danger"  />เพิ่มไปยังรถเข็น</a></div>-->
                                    </div>
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