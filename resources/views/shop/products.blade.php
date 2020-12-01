@extends('layouts.test')

@section('content')

<br>
<br>
<br>
<br>
<div class="product-section container">
    <div>
        <div class="product-section-image">
            <img src="{{asset($products->product_img )}} alt="product" class="active" id="currentImage">
        </div>
        <div class="product-section-images">
            <div class="product-section-thumbnail selected">
                <img src="{{asset($products->product_img )}} alt="product">
            </div>

            
            <div class="product-section-thumbnail">
                <img src="{{asset($products->product_img )}} alt="product">
            </div>
            
        </div>
    </div>
    <div class="product-section-information">
        <h1 class="product-section-title">{{ $products->product_name }}</h1>
        <div class="product-section-subtitle">{{ $products->product_detail }}</div>
        <div></div>
        <div class="product-section-price">{{ $products->product_price}}</div>

        <p>
            //////
        </p>

        <p>&nbsp;</p>

        @if ($product->quantity > 0)
        <form action="#" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="button button-plain">Add to Cart</button>
        </form>
        @endif
    </div>
</div> <!-- end product-section -->



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