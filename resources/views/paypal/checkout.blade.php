@extends('layouts.test')

@section('content')

<br>
<h4 class="col-md-6">
    <a href="{{url('/home')}}" class="text-success"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{ route('cart.index') }}" class="text-success"> ตะกร้าสินค้าของคุณ </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href=" {{route('cart.checkout')}}" class="text-success">กลับ</a></span>
</h4>
<br>
<div class="product-section container">
    <div class="form-row">
        <div class="form-group col-md-6">
            <div class="card mb-3" style="max-width: 580px; margin:10px;  padding: 20px; ">
                <div class="row no-gutters">
                    <div class="col-md-11">
                        <div class="card-body">
                            <h5 class="card-title text-dark ">ยอดชำระทั้งหมด :
                                <span class="text-danger">
                                    {{\Cart::session(auth()->id())->getTotal()}} $
                                </span>
                            </h5>
                            <form action="{{route('paypal.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputFile"> อัพโหลดหลักฐานการโอน </label>
                                    <input type="file" name="paypal_img">
                                </div>

                                <div class="form-group">
                                    <label for=""> วันที่และเวลาโอนเงิน </label>
                                    <input type="datetime-local" name="date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for=""> โอนจากธนาคาร </label>
                                    <input type="text" name="bank_form" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for=""> ไปยัง </label>
                                    <input type="text" name="bank_go" class="form-control">
                                </div>

                                <p class="card-text text-dark ">จำนวนโอน : {{\Cart::session(auth()->id())->getTotal()}} บาท</p>

                                <button type="submit" class="btn btn-primary mt-2">ส่ง</button>


                                </p>
                                <form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- รายละเอียดธนาคาร -->

        <div class="form-group col-md-6">
            <div class="card mb-3" style="max-width: 540px; margin:10px;  padding: 20px; ">
                <div class="row no-gutters">
                <div class="col-md-2"> 
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-dark ">ธนาคารกรุงศรีอยุธยา (KMA)</h5>
                            <h5 class="card-title text-dark ">ชื่อบัญชี : ธิดารัตน์  คำโมง </h5>
                            <h5 class="card-title text-dark ">เลขบัญชี: 1234567890</h5>
                           <hr>

                           <h5 class="card-title text-dark ">ธนาคารไทยพาณิชย์ (SCB)</h5>
                           <h5 class="card-title text-dark ">ชื่อบัญชี : ธิดารัตน์  คำโมง </h5>
                            <h5 class="card-title text-dark ">เลขบัญชี: 0987654321</h5>
                           <hr>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />
</ul>

@endsection