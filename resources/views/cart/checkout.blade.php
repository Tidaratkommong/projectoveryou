@extends('layouts.test')

@section('content')
<br>
<h4 class="col-md-6">
    <a href="{{url('/home')}}" class="text-success"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{url('/cart')}}" class="text-success"> ตะกร้าสินค้า </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span class="text-dark">ข้อมูลการจัดส่ง</span>
</h4>

<div class="container">
                <form action="{{route('orders.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for=""> ชื่อ </label>
                        <input type="text" name="shipping_fullname" id="" class="form-control" placeholder=" ภาษาไทยหรืออังกฤษ">
                    </div>

                    <div class="form-group">
                        <label for="">สถานะ</label>
                        <input type="text" name="shipping_state" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">เมือง</label>
                        <input type="text" name="shipping_city" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">รหัสไปรษรีย์</label>
                        <input type="number" name="shipping_zipcode" id="" class="form-control" placeholder="เช่น 40000">
                    </div>

                    <div class="form-group">
                        <label for="">ที่อยู่</label>
                        <input type="text" name="shipping_address" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">เบอร์โทรศัพท์</label>
                        <input type="text" name="shipping_phone" id="" class="form-control" placeholder="เช่น 099-068-5903">
                    </div>

                    <h4>ตัวเลือกการชําระเงิน</h4>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                            Cash on delivery (ชำระเงินปลายทาง)

                        </label>

                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                            Paypal

                        </label>

                    </div>
                    <button type="submit" class="btn btn-primary mt-3">สั่งซื้อสินค้า</button>
                    <br>
                    <br>
                </form>
</div>
@endsection