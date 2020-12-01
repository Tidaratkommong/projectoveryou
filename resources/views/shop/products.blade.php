@extends('layouts.test')

@section('title', $product->product_name)

@section('content')
<br>
<br>
<h4>
    <a href="{{url('/home')}}"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{url('/shop')}}"> Shop </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span>{{ $product->product_name }}</span>
</h4>
<br>
<!-- show product -->
<div class="product-section container" style="margin: 30px;  padding: 30px; ">
    <div class="card mb-3" style="max-width: 540px; margin: 10px;  padding: 24px; ">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset($product->product_img )}}" class="card-img" alt="product">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">{{ $product->product_detail }}</p>
                    <p class="card-text"><small class="text-muted">{{ $product->product_price}}</small></p>
                </div>

                <form action="#" method="POST">
                    <button type="submit" class="button button-plain">Add to Cart</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- end product-section -->
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
        mainColor: '#F28240',
        bubbleBackground: '#F28240',
        introMessage: '✋สวัสดีค่ะ นี่เป็นข้อความอัตโนมัติ มีอะไรให้เราช่วยไหมคะ ถ้าต้องการเริ่มต้นใหม่ พิมพ์คำว่า "เริ่มใหม่" ได้ตลอดเวลา ',
        placeholderText: 'Ask Me Something',
        aboutLink: 'mhdevelopment.gr'

    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>


<!-- endchatbot -->


<br />
<br />

<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>
@endsection