@extends('layouts.app')

@section('content')
<div class="card">
    <br>
    <h5 class="card-header">Orders </h5>
    <div class="card-body">
        @if($order)
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
                </tr>
            </thead>
            <tbody>
                <tr>
                     <td>{{$order->id}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>[ {{$order->user_id}} ] {{$order->shipping_fullname}}</td>
                    <td>....</td>
                    <td>{{$order->item_count}}</td>
                    <td>${{number_format($order->grand_total,2)}}</td>
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
                        <form method="POST" action="{{route('orders.destroy',[$order->id])}}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm dltBtn" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"  data-id={{$order->id}}><i class="fas fa-trash-alt"></i></button>
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
                                    <td>Order Number</td>
                                    <td> : {{$order->order_number}}</td>
                                </tr>
                                <tr>
                                    <td>Order Date</td>
                                    <td> :{{$order->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td> : {{ $order->item_count}} ตัว</td>
                                </tr>
                                <tr>
                                    <td>Order Status</td>
                                    <td> : {{$order->status}}</td>
                                </tr>
                                <tr>
                                    <td>Total Amount</td>
                                    <td> : $ {{number_format($order->grand_total,2)}}</td>
                                </tr>
                                <tr>
                                    <td>Payment Method</td>
                                    <td> : @if($order->payment_method=='cash on delivery') Cash on Delivery @else Paypal @endif</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lx-4">
                        <div class="shipping-info">
                            <h4 class="text-center pb-4">SHIPPING INFORMATION [ข้อมูลการจัดส่ง]</h4>
                            <table class="table">
                                <tr class="">
                                    <td>Full Name</td>
                                    <td> : {{$order->shipping_fullname}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : </td>
                                </tr>
                                <tr>
                                    <td>Phone No.</td>
                                    <td> : {{$order->shipping_phone}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td> : {{$order->shipping_address}},{{$order->shipping_zipcode}}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
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