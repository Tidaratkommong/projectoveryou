@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="margin: 20px;">
        <br>
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="app-title">
            <div>
                <br>
                <h4><i class="fa fa-bar-chart"></i> ตรวจสอบคำสั่งซื้อ(Orders) </h4>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th class="card-header text-center "> N0. </th>
                                    <th class="card-header text-center "> Order Number </th>
                                    <th class="card-header text-center "> Placed By </th>
                                    <th class="card-header text-center "> Total Amount </th>
                                    <th class="card-header text-center "> Payment Type </th>
                                    <th class="card-header text-center "> Status </th>
                                    <th class="card-header text-center "> DATE </th>
                                    <th style="width:100px; min-width:100px;" class="card-header text-center text-danger"><i class="fa fa-bolt"> </i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>[{{ $order->id}}]</td>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td class="text-center"> ฿ {{number_format($order->grand_total)}}</td>
                                    <td class="text-center">
                                        @if ($order->payment_method =='cash on delivery')
                                        <span class="badge badge-warning">{{$order->payment_method}}</span>
                                        @elseif($order->payment_method =='paypal')
                                        <span class="badge badge-success">{{$order->payment_method}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($order->status=='pending')
                                        <span class="badge badge-primary">{{$order->status}}</span>
                                        @elseif($order->status=='processing')
                                        <span class="badge badge-warning">{{$order->status}}</span>
                                        @elseif($order->status=='completed')
                                        <span class="badge badge-success">{{$order->status}}</span>
                                        @else
                                        <span class="badge badge-danger">{{$order->status}}</span>
                                        @endif
                                    </td>

                                    <td>
                                        {{$order->created_at->format('D d M, Y')}} at {{$order->created_at->format('g : i a')}}
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{route('orders.show',$order->id)}}" class="btn btn-warning btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $orders->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection