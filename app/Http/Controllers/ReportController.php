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

        $order = Order::latest()->paginate(1);
        //$getOrder = DB::table('orders')->where('grand_total','id')->get();
        $getOrder = Order::where('grand_total','id')->get();

        //$getOrder = Order::all();
        //$getOrder = Order::all();
        //$getOrder = DB::table('orders')->get();  // ทั้งหมด
        //$getOrder = DB::table('orders')->get();

        $sumPrice = 0;
       
        foreach($getOrder as $row){

           $sumPrice += $row->grand_total;

        }

       // $sumTotal =  $sumTotal + $sumPrice;
        
        return view('report')->with([
            'order' =>$order,
            'getOrder' => $getOrder,
            'user' => $user,
            'cartItems'=>$cartItems,
            
           

        ]);
    }
}
