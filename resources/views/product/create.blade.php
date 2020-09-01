@extends('layouts.app')

@section('content')
<br />
<div class="container">
<a type="submit" class="btn btn-danger" href="{{url('product/index')}}">ยกเลิก</a>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <h5 class="card-header text-center">เพิ่มสินค้า</h5>
                <form style="margin: 20px;" method="POST" action="{{route('product.store')}}">
                    @csrf

                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">รหัสสินค้า</label>
                            <input type="text" name="product_id" class="form-control input-lg" placeholder="รหัสสินค้า" required />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">ชื่อสินค้า</label>
                            <input type="text" name="product_name" class="form-control input-lg" placeholder="ชื่อสินค้า" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">รายละเอียดสินค้า</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="product_delail" placeholder="รายละเอียดสินค้า" rows="4" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">ราคาสินค้า</label>
                            <input type="number" name="product_price" class="form-control input-lg" placeholder="ราคาสินค้า" required />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">ประเภทสินค้า</label>
                            <select type="text" name="protype_id" required class="form-control">
                                <option selected>ประเภทสินค้า</option>
                                <option>...</option>
                            </select>

                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputZip">จำนวนสินค้า</label>
                            <input type="number" name="product_num" class="form-control input-lg" placeholder="จำนวนสินค้า" required />
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="exampleInputFile">Select Profile Image</label>
                        <input type="file" name="product_img" required />
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    
            </div>
        </div>
    </div>
    @endsection