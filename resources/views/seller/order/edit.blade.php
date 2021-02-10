@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="margin: 20px;">
        <div class="app-title">
            <div>
                <br>
                <h4><i class="fa fa-bar-chart"></i> ยืนยันคำสั่งซื้อ(Confirm) </h4>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{route('orders.update',$order->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th> Order Number </th>
                                        <th> Placed By </th>
                                        <th class="text-center"> Total Amount </th>
                                        <th class="text-center"> Items Qty </th>
                                        <th class="text-center"> Payment Type </th>
                                        <th class="text-center"> Status </th>
                                        <th class="text-center"> DATE </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $order['order_number'] }}</td>
                                        <td>{{ $order['shipping_fullname'] }}</td>
                                        <td class="text-center">{{ config('settings.currency_symbol') }}{{ $order['grand_total']}}</td>
                                        <td class="text-center">{{ $order['item_count']}}</td>
                                        <td class="text-center">
                                            {{ $order['payment_method'] }}
                                        </td>

                                        <td class="text-center">
                                            <select name="status" id="" class="form-control" required>
                                                <option value="pending" {{(($order->status=='pending')? 'selected' : '')}}>pending (รอ)</option>
                                                <option value="processing" {{(($order->status=='processing')? 'selected' : '')}}>processing (กำลังดำเนินการ)</option>
                                                <option value="completed" {{(($order->status=='completed')? 'selected' : '')}}>completed (สำเร็จ)</option>
                                                <option value="decline" {{(($order->status=='decline')? 'selected' : '')}}>decline (ยกเลิก)</option>
                                            </select>

                                        </td>

                                        <td>
                                            {{ $order['created_at']}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection