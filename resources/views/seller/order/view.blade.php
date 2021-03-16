@extends('layouts.app')

@section('content')
<div class="card">
    <br>
    <h5 class="card-header">Orders </h5>
    <div class="card-body">
        @if($order )
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Order No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>[ {{$order->user_id}} ] {{$order->shipping_fullname}}</td>
                    <td> {{ $order->email }} </td>
                    <td>{{$order->item_count}}</td>
                    <td> ฿{{number_format($order->grand_total)}} </td>
                    <td>
                        @if($order->status=='pending')
                        <span class="badge badge-primary">{{$order->status}} (รอ)</span>
                        @elseif($order->status=='processing')
                        <span class="badge badge-warning">{{$order->status}} (กำลังดำเนินการ) </span>
                        @elseif($order->status=='completed')
                        <span class="badge badge-success">{{$order->status}} (สำเร็จ)</span>
                        @else
                        <span class="badge badge-danger">{{$order->status}} (ยกเลิก)</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('orders.edit',$order->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('orders.destroy',[$order->id])}}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm dltBtn" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete" data-id={{$order->id}}><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>

                </tr>
            </tbody>
        </table>

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
                                    <td>Order Status (สถานะใบสั่ง) </td>
                                    <td> : @if($order->status=='pending')
                                        <span class="badge badge-primary">{{$order->status}}</span>
                                        @elseif($order->status=='processing')
                                        <span class="badge badge-warning">{{$order->status}}</span>
                                        @elseif($order->status=='completed')
                                        <span class="badge badge-success">{{$order->status}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$order->status}}</span>
                                        @endif
                                    </td>
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
                                        <span class="badge badge-success">{{$order->payment_method}}</span>(โอน)
                                       <h5> <a class="badge badge-success" href="{{url('/orders/order_items',$order->id)}}">   ดูข้อมูลการชำระเงิน </h5> 
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lx-4">
                        <div class="shipping-info">
                            <h4 class="text-center pb-4">SHIPPING INFORMATION [ข้อมูลการจัดส่ง]</h4>
                            <table class="table">
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
                                <tr>
                                    <td>Address (ที่อยู่)</td>
                                    <td> : {{$order->shipping_address}},{{$order->shipping_zipcode}}</td>
                                </tr>
                                <tr>
                                    <td>City (เมือง)</td>
                                    <td> : {{$order->shipping_city}}</td>
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