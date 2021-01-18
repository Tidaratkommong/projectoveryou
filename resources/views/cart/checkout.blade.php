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
        <br>
        <div class="form-group">
            <label for="">
                <h6> ชื่อ :</h6>
            </label>
            <input type="text" name="shipping_fullname" id="" class="form-control" placeholder=" ภาษาไทยหรืออังกฤษ" required>
        </div>

        <div class="form-group">
            <label for="">
                <h6> เมือง :</h6>
            </label>
            <input type="text" name="shipping_state" id="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">
                <h6> จังหวัด :</h6>
            </label>
            <input type="text" name="shipping_city" id="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">
                <h6> รหัสไปรษรีย์ :</h6>
            </label>
            <input type="number" name="shipping_zipcode" id="" class="form-control" placeholder="เช่น 40000" required>
        </div>

        <div class="form-group">
            <label for="">
                <h6> ที่อยู่ :</h6>
            </label>
            <input type="text" name="shipping_address" id="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">
                <h6> เบอร์โทรศัพท์ :</h6>
            </label>
            <input type="text" name="shipping_phone" id="" class="form-control" placeholder="เช่น 099-068-5903" required>
        </div>

        <h4>ตัวเลือกการชําระเงิน</h4>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery" required>
                Cash on delivery (ชำระเงินปลายทาง)

            </label>

        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal" required>
                Paypal

            </label>

        </div>

        <button type="submit" class="btn btn-primary mt-3">สั่งซื้อสินค้า</button>
        
        <br>
        <br>
    </form>
</div>
@endsection