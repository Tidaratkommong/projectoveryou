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

        <hr style="background-color: #FA8072;">

        <div class="row">
            <div class="col-md-4">
                <h4>จัดการข้อมูลสินค้า</h4>
            </div>
            <div class="col-md-6">
                <!-- Search form -->
                <form action="/search/product" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" class="form-control" placeholder="Search" name="search">
                        <span class="input-group-append">
                            <button class="input-group-text red lighten-3" type="submit" style="background-color: #FA8072;">
                                <i class="fas fa-search text-grey" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <!-- End Search form -->
            </div>

            <div class="col-md-2 text-right">
                <a href="{{route('products.create')}}" class="btn btn-success " role="button" aria-pressed="true"> + เพิ่มสินค้า</a>
                {{ csrf_field() }}
            </div>

        </div>

        <h6 class="nav-link text-danger"> ** สามารถค้นหาสินค้าโดยค้นหาจาก IDสินค้า ชื่อสินค้า ราคาสินค้า ประเภทสินค้า **</h6>

        <hr style="background-color: #FA8072;">
        <div class="text-center">
            <h5 class="card-header text-center "> ข้อมูลสินค้า</h5>
            <table class=" table table-bordered">
                <tr>
                    <th width="1%">รหัสสินค้า</th>
                    <th width="5%">รูปภาพ</th>
                    <th width="5%">ประเภทสินค้า</th>
                    <th width="8%">ชื่อสินค้า</th>
                    <th width="5%">ราคาสินค้า</th>
                    <th width="12%">รายละเอียดสินค้า</th>
                    <th width="5%">จำนวนสินค้า</th>
                    <th width="5%"> ชนิดสินค้า </th>
                    <th width="2%">แสดง</th>
                    <th width="2%">แก้ไข</th>
                    <th width="2%">ลบ</th>
                </tr>

                @foreach($product as $value)
                <tr>
                    <td>[{{ $value->id}}]</td>
                    <td><img src="{{asset($value->product_img )}}" style="width: 70px; height:70px;" /></td>
                    <td>{{ $value->product_type }}</td>
                    <td>{{ $value->product_name }}</td>
                    <td>{{ $value->product_price }} ฿</td>
                    <td>{{ $value->product_detail }}</td>
                    <td>{{$value->product_num }} ตัว </td>

                    <td class="text-center">
                        <h5>
                            @if($value->product_method=='new')
                            <span class="badge badge-danger">{{$value->product_method}}</span>
                            @elseif($value->product_method=='sale')
                            <span class="badge badge-success">{{$value->product_method}}</span>
                            @elseif($value->product_method=='hot')
                            <span class="badge badge-warning">{{$value->product_method}}</span>
                            @else
                            <span class="badge badge-primary">{{$value->product_method}}</span>
                            @endif
                        </h5>
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{ route('products.show',$value->id )}}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('products.edit',$value->id )}}"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <form action="{{route('products.destroy',$value->id)}}" method="post">
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