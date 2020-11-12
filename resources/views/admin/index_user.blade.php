@extends('layouts.app')

@section('content')
<br />

<div class="container">
<!--<a type="submit" name="submit" class="btn btn-danger " value="BACK" href="" />BACK</a> -->

<div class="col-sm-2">
        <a class="btn btn-sm btn-success"  href="{{route('admin.create')}}"> เพิ่มสมาชิก </a>
      </div>
    <div class="col-md-12">
        <div class="margin: 20px;">
        
            @csrf
            <hr>
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

            <div class="text-center">
                <h5 class="card-header text-center">จัดการข้อมูลสมาชิก</h5>
                <table class="table table-bordered">
                    <tr>
                        <th width="10%">ชื่อผู้ใช้งาน</th>
                        <th width="20%">ที่อยู่</th>
                        <th width="10%">เบอร์โทร</th>
                        <th width="10%">E-Mail</th>
                        <th width="5%">แก้ไขข้อมูล</th>
                        <th width="5%">ลบข้อมูล</th>
                    </tr>


                    <tr>
                        @foreach($users as $value)
                    <tr>
                        <td>{{$value->name }}</td>
                        <td>{{ $value->address }}</td>
                        <td>{{ $value->telephone }}</td>
                        <td>{{ $value->email }}</td>

    
                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.edit',$value->id )}}"> แก้ไข้อมูล </a>
                    </td>
                    <td>
                        <form action="{{route('admin.destroy',$value->id)}}" method="post">
                            @csrf @method('DELETE')
                            <a class="btn btn-danger deleteForm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <!--<input type="submit" value="ลบ"  class="btn btn-danger deleteForm">-->
                        </form>
                    </td>
                       


                    </tr>
                    @endforeach
                </table>
                {!! $users->links() !!}
            </div>
        </div>
    </div>

    <!--  delete Modal -->
    

    <!-- end delete Modal -->
</div>
@endsection