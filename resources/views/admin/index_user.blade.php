@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="col-md-12">
        <div class="margin: 20px;">
            <a type="submit" class="btn btn-outline-secondary" href="{{url('home')}}">ย้อนกลับ</a>
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
                        <th width="10%">Username</th>
                        <th width="10%">Fest name</th>
                        <th width="10%">Last name</th>
                        <th width="10%">Phone</th>
                        <th width="10%">E-Mail Address</th>
                        <th width="15%">Action</th>
                    </tr>


                    <tr>
                        @foreach($users as $row)
                    <tr>
                        <td>{{ $row->username }}</td>
                        <td>{{ $row->fname }}</td>
                        <td>{{ $row->lname }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{$row->email }}</td>
                        <td>

                            <form action="/delete_user/{{$row->id}}" method="post">
                                @csrf

                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">ลบ</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </table>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection