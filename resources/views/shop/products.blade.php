@extends('layouts.test')

@section('content')

<br>
<br>
<br>
<br>
<br />
<div class="container">
    <a type="submit" name="submit" class="btn btn-danger" value="BACK" href="{{url('product/index_product')}}" />BACK</a> 
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card ">


                <h6 class="card-header text-center">ID สินค้าที่ {{ $product->id }}</h6>
                <form style=" margin: 10px;" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="ml-5 ">
                            <img src="{{asset($product->product_img )}}" style="width: 16rem; height:16rem;" class="img-thumbnail" />
                            <br />
                            <br />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="productname">ชื่อสินค้า : {{ $product->product_name }} </label>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="producttype">ประเภทสินค้า : {{ $product->product_type }}</label>

                        </div>

                    </div>
                    <div class="form-group ">
                        <label for="product">รายละเอียดสินค้า : {{ $product->product_detail }}</label>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="productprice">ราคาสินค้า : {{ $product->product_price}} บาท</label>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="productnum">จำนวนสินค้า : {{ $product->product_num }} ตัว </label>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </div><!-- end product-section -->



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