@extends('layouts.app')

@section('content')
<br />

<div class="container">
<!--<a type="submit" name="submit" class="btn btn-danger " value="BACK" href="{{url('adminhome')}}" />BACK</a> -->

<div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ url('admin.create_user') }}">Create New Biodata</a>
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
                        @foreach($users as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->telephone }}</td>
                        <td>{{$row->email }}</td>

                        <td>
                            <from action="#" method="post">
                            <button type="button" class="btn btn-primary" href="#"> แก้ไขข้อมูล </button>
                            </from>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit">ลบสมาชิก</button>
                        </td>


                    </tr>
                    @endforeach
                </table>
                {!! $users->links() !!}
            </div>
        </div>
    </div>

    <!--  delete Modal -->
    <div class="modal fade" id="edit" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ลบสมาชิก</h5>
                </div>

                <form method="post">
                    @csrf
                    {{method_field('DELETE')}}


                    <div class="modal-body">
                        ต้องการลบสมาชิก {{ $row->name }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-danger">ยืนยันการลบ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end delete Modal -->
</div>
@endsection