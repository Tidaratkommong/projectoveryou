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
        <a href="{{route('product.create')}}" class="btn btn-success fa fa-plus" role="button" aria-pressed="true"> เพิ่มสินค้า</a>
        @csrf
        <hr>
        <div class="text-center">
            <h5 class="card-header text-center bg-success">ข้อมูลสินค้า</h5>
            <table class=" table table-bordered">
                <tr>
                    <th width="5%">รูปภาพ</th>
                    <th width="5%">ประเภทสินค้า</th>
                    <th width="8%">ชื่อสินค้า</th>
                    <th width="5%">ราคาสินค้า</th>
                    <th width="12%">รายละเอียดสินค้า</th>
                    <th width="5%">จำนวนสินค้า</th>
                    <th width="2%">แสดง</th>
                    <th width="2%">แก้ไข</th>
                    <th width="2%">ลบ</th>
                </tr>

                @foreach($product as $products)
                <tr>

                    <td><img src="{{asset('public/imaproduct'.$products->product_img )}}" style="width: 40px;" /></td>
                    <td>{{ $products->product_type }}</td>
                    <td>{{ $products->product_name }}</td>
                    <td>{{ $products->product_price }} ฿</td>
                    <td>{{ $products->product_detail }}</td>
                    <td>{{$products->product_num }} ตัว </td>

                    <td>
                        <a class="btn btn-primary" href="{{ route('product.show',$products->id )}}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('product.edit',$products->id )}}"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy',$products->id)}}" method="post">
                            @csrf @method('DELETE')
                            <a class="btn btn-danger deleteForm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <!--<input type="submit" value="ลบ"  class="btn btn-danger deleteForm">-->
                        </form>
                    </td>



                    </td>

                </tr>
                @endforeach
            </table>
            {!! $product->links() !!}
        </div>
    </div>
    @endsection