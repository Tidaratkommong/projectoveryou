<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\User;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {


        $user = User::latest()->paginate(1);
        $cartItems = OrderItem::latest()->paginate(7);

        $getOrder_item =OrderItem::all();

        $order = Order::latest()->paginate(1);

        $orders = Order::all();
        
        
       // $getOrder = DB::table('orders')->where('grand_total')->get();
        //$getOrder = Order::where('grand_total','id')->get();

        //$getOrder = DB::table('orders')->where('grand_total',$getOrder)->first();

       $getOrder = Order::all();
        
       // $getOrder = DB::table('orders')->get();  // ทั้งหมด
        //$getOrder = DB::table('orders')->get();
       // $getOrder = DB::table('orders')->find('$grand_total');

      // $getOrder = DB::table('orders')->where('id', $grand_total)->first();

        //$getOrder = DB::table('orders')->where('grand_total',$row)->first();

       // $getOrder = Order::find(3);

       //$getOrder = Order::latest()->paginate(7);
    
     //  $sumPrice = 0;
       
    //    foreach($getOrder as $value){

      //     $sumPrice += $value->grand_total;

      //  }
        

       // $sumTotal =  $sumTotal + $sumPrice;
        
        return view('report')->with([
            'order' =>$order,
            'getOrder' => $getOrder,
            'user' => $user,
            'cartItems'=>$cartItems,
            'getOrder_item'=>$getOrder_item,
            'orders' =>$orders,
            
           

        ]);
    }
}
