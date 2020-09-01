@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="list-group"  aria-label="Basic example">
            <a  class="list-group-item active mt3" style="width: 12rem;">ระบบการจัดการร้านค้า</a>
            
            <a href="#" class="list-group-item" style="width: 12rem;">จัดการประเภทสินค้า</a>
            <a href="{{url('product/index')}}" class="list-group-item" style="width: 12rem;">จัดการสินค้า</a>
            @csrf
            <a href="#" class="list-group-item" style="width: 12rem;">จัดการโปรโมชั่น</a>
            <a href="#" class="list-group-item" style="width: 12rem;">ยันยันการสั่งซื้อ</a>
            <a href="#" class="list-group-item" style="width: 12rem;">จัดการโปรโมชั่น</a>
            <a href="#" class="list-group-item" style="width: 12rem;">ยันยันการสั่งซื้อ</a>
        </div>
    </div>

@endsection