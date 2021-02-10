@extends('layouts.app')

@section('content')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<div class="container">
    <br />
    <br />
    <h3>การจัดการร้านค้า</h3>
    <hr>
    <div class="form-row justify-content-center">
        <div class="form-group col-md-5">
            <div class="small-box  text-center " style="background-color: #FA8072;">
                <div class="inner">
                    <br>
                    <a href="{{url('admin/index_user')}}">
                        <h4 class="text-light">จัดการข้อมูลผู้ใช้</h4>
                    </a>
                    <h5> ( Manage user information )</h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box bg-info  text-center">
                <div class="inner">
                    <br>
                    <a href="{{url('product/index_product')}} ">
                        <h4 class="text-light">จัดการข้อมูลสินค้า</h4>
                    </a>
                    <h5> ( Manage product information )</h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box bg-info  text-center">
                <div class="inner">
                    <br>
                    <a href="#">
                        <h4 class="text-light">ตรวจสอบการชำระเงิน</h4>
                    </a>
                    <h5> ( Check payments )</h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box bg-success text-center">
                <br>
                    <a href="{{ route('seller.orders.index') }}">
                        <h4 class="text-light">ตรวจสอบคำสั่งซื้อ</h4>
                    </a>
                    <h5>( ORDERS )</h5>
                    <br>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box  text-center " style="background-color: #FFA500;">
                <div class="inner">
                    <br>
                    <a href="#">
                        <h4 class="text-light">สรุปยอดขายสินค้า</h4>
                    </a>
                    <h5> ( Sales Summary )</h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box bg-info  text-center">
                <div class="inner">
                    <br>
                    <a href="{{url('event')}} ">
                        <h4 class="text-light">ปฎิทินการทำงาน</h4>
                    </a>
                    <h5> ( EVENTS )</h5>
                    <br>
                </div>
            </div>
        </div>
        <br> 
        <br> 
        <br>
        <h4 class="text-dark"> สถิติการเข้าชมเว็บไซต์ &nbsp;&nbsp;&nbsp;&nbsp;</h4>
        <br> 
        <br> 
        <br>
        <script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=overyou_page&style=40&maxdigits=5'></script>

    </div>





</div>








@endsection