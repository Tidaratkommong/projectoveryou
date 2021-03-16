@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card ">


                <h6 class="card-header text-center">ID สินค้าที่ {{ $products->id }}</h6>
                <form style=" margin: 10px;" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="ml-5 ">
                            <img src="{{asset($products->product_img )}}" style="width: 16rem; height:16rem;" class="img-thumbnail" />
                            <br />
                            <br />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="productname">ชื่อสินค้า : {{ $products->product_name }} </label>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="producttype">ประเภทสินค้า : {{ $products->product_type }}</label>

                        </div>

                    </div>
                    <div class="form-group ">
                        <label for="product">รายละเอียดสินค้า : {{ $products->product_detail }}</label>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="productprice">ราคาสินค้า : {{ $products->product_price}} บาท</label>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="productnum">จำนวนสินค้า : {{ $products->product_num }} ตัว </label>
                        </div>
                    </div>

                    <div class="form-group ">
                   <label for="product"> ชนิดสินค้า  :
                                @if($products->product_method=='new')
                                <span class="badge badge-danger">{{$products->product_method}}</span>
                                @elseif($products->product_method=='sale')
                                <span class="badge badge-success">{{$products->product_method}}</span>
                                @elseif($products->product_method=='hot')
                                <span class="badge badge-warning">{{$products->product_method}}</span>
                                @else
                                <span class="badge badge-primary">{{$products->product_method}}</span>
                                @endif 
                           
                        </label> 
                    </div>

            </div>
        </div>
    </div>

</div>
@endsection