@extends('layouts.app')

@section('content')


<br />
<div class="container">
    <a type="submit" class="btn btn-outline-secondary fa fa-arrow-left" href="{{url('product/index_product')}}"> ย้อนกลับ</a>
    <br />
    <br />
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <h5 class="card-header text-center bg-success">แก้ไขสินค้า</h5>

                <form style="margin: 20px;" method="POST" action="{{route('product.update', $products->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if(Session::get('success'))
                    <div class="alert alert-danger">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="productname">ชื่อสินค้า</label>
                            <input type="text" name="product_name" class="form-control input-lg text-dark" value="{{$products['product_name'] }}" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="producttype">ประเภทสินค้า</label>
                            <select class="form-control input-lg text-dark" type="text" name="product_type" value="{{$products['product_type'] }}">
                                <option>{{$products['product_type']}}</option>
                                <option>เสื้อ</option>
                                <option>กางเกง</option>
                                <option>รองเท้า</option>
                                <option>นาฬิกา</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="productdetail">รายละเอียดสินค้า</label>
                        <input type="text" name="product_detail" class="form-control input-lg text-dark" value="{{$products['product_detail'] }}" />

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="productprice">ราคาสินค้า</label>
                            <input type="number" name="product_price" class="form-control input-lg text-dark" value="{{$products['product_price']}}" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="productnum">จำนวนสินค้า</label>
                            <input type="number" name="product_num" class="form-control input-lg text-dark" value="{{$products['product_num']}}" />
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="exampleInputFile">Select Profile Image</label>

                            <input type="file" name="product_img" />
                                   <img src="{{asset ($products->product_img) }}" class="img-thumbnail" width="50" />
                                        <input type="hidden" name="hidden_image" value="{{ $products->product_img }}" />
                    </div>

                    <button type="submit" class="btn btn-success text-dark">อัพเดทสินค้า</button>

            </div>
        </div>
    </div>
    @endsection