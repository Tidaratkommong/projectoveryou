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
                <h4>จัดการข้อมูลสมาชิก</h4>
            </div>
            <div class="col-md-6">
                <!-- Search form -->
                <form action="/search/user" method="GET" role="search">
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
                <a class="btn  btn-success" href="{{route('admin.create')}}"> + เพิ่มสมาชิก </a>
                {{ csrf_field() }}
            </div>

        </div>

        <h6 class="nav-link text-danger"> ** สามารถค้นหาสมาชิกโดยค้นหาจาก ชื่อสมาชิก หรือ IDสมาชิก **</h6>

        <hr style="background-color: #FA8072;">

        <div class="text-center">
            <h5 class="card-header text-center">ข้อมูลสมาชิก</h5>
            <table class="table table-bordered">
                <tr>
                    <th width="1%">ID</th>
                    <th width="10%">ชื่อผู้ใช้งาน</th>
                    <th width="20%">ที่อยู่</th>
                    <th width="10%">เบอร์โทรศัพท์</th>
                    <th width="10%">E-Mail</th>
                    <th width="5%">แก้ไขข้อมูล</th>
                </tr>
                <tr>
                    @foreach($users as $value)
                <tr>
                    <td>[{{$value->id }}]</td>
                    <td>{{$value->name }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->telephone }}</td>
                    <td>{{ $value->email }}</td>

                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.edit',$value->id )}}"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                    </td>
                    <!--<td>
                            <form action="{{route('admin.destroy',$value->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn  btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            </form>
                        </td>-->
                </tr>
                @endforeach
            </table>
            {!! $users->links() !!}
        </div>
    </div>
</div>

@endsection