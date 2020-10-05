@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <a type="submit" class="btn btn-outline-secondary fa fa-arrow-left" href="{{url('product/index_product')}}">ย้อนกลับ</a>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <h5 class="card-header text-center">แก้ไขสินค้า</h5>
                <form style="margin: 20px;" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf

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
                            <input type="text" name="product_name" class="form-control input-lg" placeholder="ชื่อสินค้า" value="{{old('product_name')}}" />
                        </div>

                        <div class="form-group col-md-6">
                        <label for="producttype">ประเภทสินค้า</label>
                            <select  class="form-control input-lg" placeholder="ประเภทสินค้า" type="text" name="product_type" value="{{old('product_type')}}" >
                                <option>เสื้อ</option>
                                <option>กางเกง</option>
                                <option>รองเท้า</option>
                            </select>
                        </div>
        
                    </div>
                    <div class="form-group">
                        <label for="productdetail">รายละเอียดสินค้า</label>
                        <textarea class="form-control" name="product_detail" placeholder="รายละเอียดสินค้า" rows="4" />{{old('product_detail')}}</textarea>
                    </div>
                    <div class="form-row">

                        <!--<div class="form-group col-md-4">
                            <label for="inputState">ประเภทสินค้า</label>
                            <select type="text" name="protype_id"  class="form-control">
                                <option selected>ประเภทสินค้า</option>
                                <option>...</option>
                            </select>

                        </div> -->
                        <div class="form-group col-md-6">
                            <label for="productprice">ราคาสินค้า</label>
                            <input type="number" name="product_price" class="form-control input-lg" placeholder="ราคาสินค้า" value="{{old('product_price')}}" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="productnum">จำนวนสินค้า</label>
                            <input type="number" name="product_num" class="form-control input-lg" placeholder="จำนวนสินค้า" value="{{old('product_num')}}" />
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="exampleInputFile">Select Profile Image</label>
                        <input type="file" name="product_img" value="{{old('product_img')}}" />
                    </div>
                    <button type="submit" class="btn btn-success">อัพเดท</button>

            </div>
        </div>
    </div>
    @endsection