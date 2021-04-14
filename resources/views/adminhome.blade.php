@extends('layouts.app')

@section('content')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<div class="container">
    <br />
    <hr style="background-color: #FA8072;">
    <h3 class="text-center">การจัดการร้านค้า</h3>
    <hr style="background-color: #FA8072;">

    <div class="form-row justify-content-center">
        <div class="form-group col-md-5">
            <div class="small-box  text-center " style="background-color: #FA8072;">
                <div class="inner">
                    <br>
                    <a href="{{url('admin/index_user')}}">
                        <h4 class="text-light">จัดการข้อมูลผู้ใช้</h4>
                    </a>
                    <h5> [ MANAGE USER INFORMATION ] </h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box bg-info  text-center">
                <div class="inner">
                    <br>
                    <a href="{{url('product/product')}} ">
                        <h4 class="text-light">จัดการข้อมูลสินค้า</h4>
                    </a>
                    <h5> [ MANAGE PRODUCT INFORMATION ] </h5>
                    <br>
                </div>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box bg-info  text-center">
                <div class="inner">
                    <br>
                    <a href="{{url('claim')}}">
                        <h4 class="text-light">ตรวจสอบการเคลมสินค้า</h4>
                    </a>
                    <h5> [ CLAIM PRODUCT ]</h5>
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
                <h5>[ ORDERS ] </h5>
                <br>
            </div>
        </div>

        <div class="form-group col-md-5">
            <div class="small-box  text-center " style="background-color: #FFA500;">
                <div class="inner">
                    <br>
                    <a href="{{url('report')}}">
                        <h4 class="text-light">สรุปยอดขายสินค้า</h4>
                    </a>
                    <h5> [ SALES SUMMARY ] </h5>
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
                    <h5> [ EVENTS ] </h5>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group  ">
        <div class="small-box  text-center ">
            <script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=overyou_page&style=40&maxdigits=5'> </script>
        </div>
    </div>

</div>
@endsection