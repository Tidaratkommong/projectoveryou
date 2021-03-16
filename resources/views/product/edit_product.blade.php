@extends('layouts.app')

@section('content')


<br />
<div class="container">
    <a type="submit" name="submit" class="btn btn-danger" value="BACK" href="{{url('product/product')}}" />BACK</a>
    <br />
    <br />
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <h5 class="card-header text-center bg-success">แก้ไขสินค้า</h5>

                <form style="margin: 20px;" method="POST" action="{{route('products.update', $products->id)}}" enctype="multipart/form-data">
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
                            <label for="product_name">ชื่อสินค้า</label>
                            <input type="text" name="product_name" class="form-control input-lg text-dark" value="{{$products['product_name'] }}" />
                        </div>

                        <!--producttype -->
                        <div class="form-group col-md-6">
                            <label for="product_type">ประเภทสินค้า</label>
                            <select class="form-control input-lg text-dark" type="text" name="product_type" value="{{$products['product_type'] }}">
                                <option>{{$products['product_type']}}</option>
                                <option>เสื้อแขนสั้น</option>
                                <option>เสื้อแขนยาว</option>
                                <option>กางเกงขาสั้น</option>
                                <option>กางเกงขายาว</option>
                                <option>กางเกงยีนส์</option>
                            </select>
                        </div>

                    </div>

                    <!--productdetail -->
                    <div class="form-group">
                        <label for="product_detail">รายละเอียดสินค้า</label>
                        <textarea class="form-control" name="product_detail" placeholder="รายละเอียดสินค้า" rows="4" />{{$products['product_detail']}}</textarea>
                    </div>

                    <!--<div class="form-group">
                        <label for="productdetail">รายละเอียดสินค้า</label>
                        <input type="text" name="product_detail" class="form-control input-lg text-dark" value="{{$products['product_detail']}}" />
                    </div>-->


                    <!--productprice -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="produc_tprice">ราคาสินค้า</label>
                            <input type="number" name="product_price" class="form-control input-lg text-dark" value="{{$products['product_price']}}" />
                        </div>

                        <div class="form-group col-md-2">
                            <label for="produc_tnum">จำนวนสินค้า</label>
                            <input type="number" name="product_num" class="form-control input-lg text-dark" value="{{$products['product_num']}}" />
                        </div>

                        <div class="form-group col-md-2">
                        <label for="product_type"> ชนิดสินค้า </label>
                            <td class="text-center">
                                <select name="product_method" type="text" value="{{$products['product_method']}}" id=""  class="form-control" required>
                                    <option value="_" {{(($products->product_method=='_')? 'selected' : '')}}>-</option>
                                    <option value="new" {{(($products->product_method=='new')? 'selected' : '')}}>new (สินค้าใหม่)</option>
                                    <option value="hot" {{(($products->product_method=='hot')? 'selected' : '')}}>hot (สินค้ายอดฮิต)</option>
                                    <option value="sale" {{(($products->product_method=='sale')? 'selected' : '')}}>sale (ลดราคา)</option>
                                </select>

                            </td>
                        </div>


                    </div>
                    <br />

                    <div class="form-group">
                        <label for="exampleInputFile">Select Profile Image</label>
                        <input type="file" name="product_img" value="{{old('product_img')}}" />
                        <img src="{{asset ($products->product_img) }}" class="img-thumbnail" width="50" />
                    </div>


                    <button type="submit" class="btn btn-success text-dark"> อัพเดทสินค้า</button>

            </div>
        </div>
    </div>
    @endsection