@extends('layouts.app')

@section('content')
<br />
<div class="col-md-12">
    <div class="margin: 20px;">

        @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <a href="{{route('product.create')}}" class="btn btn-success" role="button" aria-pressed="true">เพิ่มสินค้า</a>
        @csrf
        <hr>
        <div class="text-center">
            <h5 class="card-header text-center">ข้อมูลสินค้า</h5>
            <table class="table table-bordered">
                <tr>
                    <th width="3%">รหัสสินค้า</th>
                    <th width="5%">รูปภาพ</th>
                    <th width="8%">ชื่อสินค้า</th>
                    <th width="5%">ราคาสินค้า</th>
                    <th width="12%">รายละเอียดสินค้า</th>
                    <th width="5%">จำนวนสินค้า</th>
                    <th width="10%">Action</th>
                </tr>

                @foreach($product as $value)
                <tr>
                    <td>{{ $value->product_id }}</td>
                    <td><img src="{{asset($value->product_img )}}" style="width: 80px;"/></td>
                    <td>{{ $value->product_name }}</td>
                    <td>{{ $value->product_price }}</td>
                    <td>{{ $value->product_detail }}</td>
                    <td>{{$value->product_num }}</td>
                    <td>
                   <!-- <a  class="btn btn-primary" 
                    href="#">แสดง</a>-->
                   
                    <a  class="btn btn-primary" 
                    href="{{ route('product.show',$value->product_id )}}">แสดง</a>

                    <a  class="btn btn-warning" 
                    href="/role-edit/{{$value->product_id}}">แก้ไข</a>

                    <a  class="btn btn-danger" 
                    href="/role-edit/{{$value->product_id}}">ลบ</a>
    
                    
                    
                    </td>

                </tr>
                @endforeach
            </table>
            {!! $product->links() !!}
        </div>
    </div>
    @endsection