<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderItemsController extends Controller
{
    
public function show($id)
{
    $order = DB::table('orders')
            ->join('users', 'orders.user_id', 'users.id')
            ->join('order_items', 'orders.id', 'order_items.id')
            ->join('paypals', 'orders.user_id', 'users.id')
            ->select('users.*', 'orders.*','order_items.*','paypals.*')
            ->where('orders.id', $id)->first();
   
    return view('seller.order.order_items', compact('order'));
   
}
}
