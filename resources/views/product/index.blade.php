@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="col-md-18">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <a href="{{route('product.create')}}" class="btn btn-success" role="button" aria-pressed="true">เพิ่มสินค้า</a>
        @csrf
        <hr>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="10%">Image</th>
                <th width="35%">First Name</th>
                <th width="35%">Last Name</th>
                <th width="30%">Action</th>
            </tr>
            @foreach($product as $row)
            <tr>
                <td></td>
                <td>{{ $row->product_id }}</td>
                <td>{{ $row->product_name }}</td>
                <td>

                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection