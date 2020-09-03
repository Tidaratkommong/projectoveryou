@extends('layouts.app')

@section('content')
<br />
<div class="container">
    
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
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="10%">รูปภาพ</th>
                    <th width="10%">ชื่อสินค้า</th>
                    <th width="10%">ราคาสินค้า</th>
                    <th width="10%">รายละเอียดสินค้า</th>
                    <th width="10%">จำนวนสินค้า</th>
                    <th width="10%">Action</th>
                </tr>
            </table>
        </div>
@endsection