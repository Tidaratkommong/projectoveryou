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
                                    <input type="file" name="paypal_img" required>
                                </div>

                                <div class="form-group">
                                    <label for=""> วันที่และเวลาโอนเงิน : </label>
                                    <input type="datetime-local" name="date" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="bank_form">โอนไปยัง :</label>
                                    <select class="form-control" id="bank_form" type="text" name="bank_form" required>
                                        <option>----------------</option>
                                        <option>ธนาคารไทยพาณิชย์</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="bank_go">โอนจากธนาคาร :</label>
                                    <select class="form-control" id="bank_go" type="text" name="bank_go" required>
                                        <option>----------------</option>
                                        <option>ธนาคารกรุงศรีอยุธยา</option>
                                        <option>ธนาคารไทยพาณิชย์</option>
                                        <option>ธนาคารกรุงไทย</option>
                                        <option>ธนาคารกรุงเทพ</option>
                                        <option>ธนาคารกสิกรไทย</option>
                                        <option>ธนาคารออมสิน</option>
                                    </select>
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
                    <img src="o1.jpg" width="350" height="490" >
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