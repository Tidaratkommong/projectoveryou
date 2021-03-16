<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
    
        return view('report');
    }

   // public function show($id)
//{
   // $order_items = DB::table('order_items')
      //  ->join('products', 'product_id.id', 'order_items.id')
      // ->select('order_items.*','paypals.*')
       // ->where('orders.id', $id)->first();

//return view('report', compact('order_items'));
   
//}
}
