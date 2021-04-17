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
            <h4 class="text-center">การเคลมสินค้า</h4>
            <hr style="background-color: #FA8072;">

            <div class="text-center">
                <h5 class="card-header text-center">คำร้องขอ การเคลมสินค้า</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="1%">ID</th>
                        <th width="10%">รูป</th>
                        <th width="10%">รหัสผู้ใช้งาน</th>
                        <th width="10%">ชื่อผู้ใช้งาน</th>
                        <th width="20%">ที่อยู่</th>
                        <th width="10%">เบอร์โทร</th>
                        <th width="10%">E-Mail</th>
                        <th width="10%">ชื่อสินค้า</th>
                        <th width="20%">รายละเอียด</th>
                        <th width="10%">สถานะ</th>
                        <th width="5%">ข้อมูล</th>
                    </tr>
                    <tr>
                        @foreach($claim as $value)
                    <tr>
                        <td>[{{$value->id }}]</td>
                        <td> <img src="{{URL::to('/')}}/images/{{$value->image}}" class="img-thumbnail" width="75" /> </td>
                        <td>{{$value->user_id }}</td>
                        <td>{{$value->name }}</td>
                        <td>{{ $value->address }}</td>
                        <td>{{ $value->telephone }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->product_name }}</td>
                        <td>{{ $value->detail }}</td>


                        <td class="text-center">
                            <a href="{{ route('claim.edit',$value->id )}}">
                                @if($value->status=='pending')
                                <span class="badge badge-primary">{{$value->status}}</span>
                                @elseif($value->status=='processing')
                                <span class="badge badge-warning">{{$value->status}}</span>
                                @elseif($value->status=='completed')
                                <span class="badge badge-success">{{$value->status}}</span>
                                @else
                                <span class="badge badge-danger">{{$value->status}}</span>
                                @endif
                            </a>
                        </td>


                        <td>
                            <a class="btn btn-primary" href="{{ route('claim.show',$value->id )}}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

@endsection