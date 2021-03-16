@extends('layouts.test')
@section('content')
<br>
<br>
<h4 class="col-md-6">
    <a href="{{url('/home')}}" class="text-success"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{url('/shop')}}" class="text-success"> Shop </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span class="text-dark">{{ $product->product_name }}</span>
</h4>
<br>
<!-- show product -->
<div class="product-section container">
    <div class="form-row">
        <div class="form-group col-md-6">
            <div class="card mb-3" style="max-width: 580px; margin:10px;  padding: 20px; ">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset($product->product_img )}}" class="card-img  w-100" alt="product" style="width: 150px; max-height:220px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-dark ">{{ $product->product_name }}
                                @if($product->product_method=='new')
                                <span class="badge badge-danger">{{$product->product_method}}</span>
                                @elseif($product->product_method=='sale')
                                <span class="badge badge-success">{{$product->product_method}}</span>
                                @elseif($product->product_method=='hot')
                                <span class="badge badge-warning">{{$product->product_method}}</span>
                                @endif
                            </h5>
                            <p class="card-text text-dark ">{{ $product->product_detail }}</p>
                            <p class="card-text text-dark"> <strong> เหลือ : </strong>{{ $product->product_num }} ตัว &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong>ราคา : </strong> {{ $product->product_price }} บาท
                            </p>
                            </p>
                            <a href="{{url('size')}}">
                                <strong class="card-text text-dark"> ดูตารางไซส์ </strong>
                            </a>
                            <p>
                            <p class="btn-holder">
                                <a href="{{route('cart.add',$product->id)}}" class="btn btn-outline-success" role="button">เพิ่มไปยังรถเข็น
                                </a>
                            </p>
                            <!--<button type="submit" class="button button-plain"> เพิ่มไปยังรถเข็น </button>-->
                            </form>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ตาราง size -->

        <div class="form-group col-md-6">
            <div class="card mb-1 " style="max-width: 500px; margin:10px;  padding: 24px;  background-color: #FA8072;">
            </div>

            <div class="card mb-1" style="max-width: 500px; margin:10px;  padding: 24px; ">
            </div>

            <div class="card mb-1" style="max-width: 500px; margin:10px;  padding: 24px; background-color: #FA8072;">
            </div>

            <div class="card mb-1" style="max-width: 500px; margin:10px;  padding: 24px; ">
            </div>

            <div class="card mb-1" style="max-width: 500px; margin:10px;  padding: 24px; background-color: #FA8072; ">
            </div>



        </div>


    </div>





</div>

</div>

</div>

<br>
<br>
<!-- end product-section -->
@include('shop.might-like')

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


<br />
<br />

<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>
@endsection