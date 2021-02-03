<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order =Order::inRandomOrder()->take(0)->get();
        return view('shipments', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required'
        ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNnumber');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        if(!$request->has('billing_fullname')){
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }else{
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');

        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();
    
        //payment
        if(request('payment_method') == 'paypal'){
            //return redirect('paypal.checkout');
           $order->payment_method = 'paypal';
        }

        //$order->status ='pending';
        $order->save();

        //save order items
        $cartItems = \Cart::session(auth()->id())->getContent();

        foreach($cartItems as $item){
            $order->items()->attach($item->id,['price'=>$item->price,'quantity'=>$item->quantity]);

        }

        //payment
        if(request('payment_method') == 'paypal'){
            //return redirect('paypal.checkout');
            return redirect()->route('paypal.checkout');
        }
        //empty cart
         \Cart::session(auth()->id())->clear();
        //
        //return "order completed, thank you for order";
        //return back();
        
        return redirect('home')->withMessage('สั่งซื้อสินค้าสำเร็จ');
        //dd('order created',$order);
    }

    public function search()
    {
        $search = $_GET['search'];
        $order = Order::where('shipping_fullname','LIKE','%'.$search.'%')->get();
        return view('shipments', compact('order'));
    }

    
}
