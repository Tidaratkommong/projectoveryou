@extends('layouts.app')

@section('content')
    <div class="card">
        <br>
        <h5 class="card-header">PAYMENT INFORMATION [ข้อมูลการชำระเงิน] </h5>
        <div class="card-body">
            @if($order )
            <section class="confirmation_part section_padding">
                <div class="order_boxes">
                    <div class="row">
                        <div class="col-lg-6 col-lx-4">
                            <div class="order-info">
                                <h4 class="text-center pb-4">ORDER INFORMATION [ข้อมูลการสั่งซื้อ ]</h4>
                                <table class="table">
                                    <tr class="">
                                        <td>Order Number (หมายเลขใบสั่ง)</td>
                                        <td> : {{$order->order_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Product Id (รหัสสินค้า)</td>
                                        <td> : [ {{ $order->product_id }} ]</td>
                                    </tr>
                                   

                                    <tr>
                                        <td>Quantity (จำนวน)</td>
                                        <td> : {{ $order->quantity}} ตัว</td>
                                    </tr>

                                    <tr>
                                        <td>Total Amount (ราคารวม)</td>
                                        <td> : ฿ {{number_format($order->grand_total)}}</td>
                                    </tr>
                                    <tr>
                                        <td> Payment Method (วิธีการชําระเงิน) </td>
                                        <td> : @if ($order->payment_method =='cash on delivery')
                                            <span class="badge badge-warning">{{$order->payment_method}}</span>(เก็บเงินปลายทาง)
                                            @elseif($order->payment_method =='paypal')
                                            <span class="badge badge-success">{{$order->payment_method}}</span> (โอน)
                                            @endif
                                        </td>

                                    <tr class="">
                                        <td>Full Name (ชื่อ-สกุล)</td>
                                        <td> : {{$order->shipping_fullname}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email (อีเมล)</td>
                                        <td> : {{$order->email}} </td>
                                    </tr>
                                    <tr>
                                        <td>Phone No. (เบอร์โทรศัพท์)</td>
                                        <td> : {{$order->shipping_phone}}</td>
                                    </tr>

                                    </tr>
                                </table>
                            </div>
                        </div>


                        <div class="col-lg-6 col-lx-4">
                            <div class="shipping-info">
                                <h4 class="text-center pb-4">PAYMENT INFORMATION [ข้อมูลการชำระเงิน]</h4>
                                <table class="table">
                                    <tr class="">
                                        <td>Date (วันที่)</td>
                                        <td> : {{$order->date}} </td>
                                    </tr>
                                    <tr>
                                        <td>Bank (ชื่อธนาคาร)</td>
                                        <td> : {{$order->bank_form}} </td>
                                    </tr>
                                    <tr>
                                        <td> หลักฐานการโอน </td>
                                        <td> <img src="{{URL::to('/')}}/slip/{{$order->image}}" class="img-thumbnail" width="300" /> </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @endif
        </div>
    </div>
    @endsection