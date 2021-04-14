<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {

        $order = Order::latest()->paginate(1);
        $user = User::latest()->paginate(1);

        //$order->grand_total = \Cart::session(auth()->id())->getTotal();
        //$order->item_count = \Cart::session(auth()->id())->getContent()->count();
        //$order = DB::table("orders")
        //       ->get()->sum("grand_total")->where('grand_total','id')->first();


        //  $order->withCount([
        //    'activity AS paid_sum' => function ($query) {
        //                $query->select(DB::raw("SUM(grand_total) as paidsum"))->where('status', 'paid');
         //           }
          //      ]);
                 
        //$orders = Order::all();
        //$orders->grand_total = \Cart::session->getTotal();
        //return view('report', compact('order'));
        return view('report')->with([
            'order' => $order,
            'user' => $user,

        ]);
    }
}
