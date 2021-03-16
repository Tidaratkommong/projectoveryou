<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // $order =Order::inRandomOrder()->take(0)->get();
        //return view('shipments', compact('order'));

        //$order =Order::inRandomOrder()->take(30)->get();

        $orders = Order::latest()->paginate(10);
        return view('seller.order.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 10);


        // $order = DB::table('orders')->where('status',0)->get();
        //return view('seller.orders.index',compact('order'));
        //$order =Order::all();
        //return view('seller.orders.index', compact('order'));

        // $orders = $this->orderRepository->listOrders();
        // $this->setPageTitle('Orders', 'List of all orders');
        // $orders = Order::whereHas('items.shop',function($q) {
        //    $q->where('user_id', auth()->id());
        //  })->get();
        //   return view('seller.orders.index', compact('orders'));
    }
    
    public function show($id)
    {
        $order = DB::table('orders')
                ->join('users', 'orders.user_id', 'users.id')
                ->join('order_items', 'orders.id', 'order_items.id')
               // ->join('paypals', 'orders.user_id', 'users.id')
               ->select('users.*', 'orders.*','order_items.*')
               // ->select('users.*', 'orders.*','order_items.*','paypals.*')
                ->where('orders.id', $id)->first();
        
       // $order = DB::table('orders')
       //         ->join('users', 'orders.user_id', 'users.id')
       //         ->join('order_items', 'orders.user_id', 'order_items.id')
         //       ->select('users.name','orders.*','order_items.*')->where('orders.id', $id)->first();
        
        //$orders=Order::find($id);
        //dd($orders);
        return view('seller.order.view', compact('order'));
        // return view('/order/view/', compact('orders'));
    }

    public function indexTest()
    {
        $orders = Order::inRandomOrder()->take(0)->get();
        return view('shipments', compact('orders'));
    }

    // return redirect('admin')->with('success', 'แก้ไขข้อมูลสมาชิกสำเร็จ'); 
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

        if (!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        } else {
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
        if (request('payment_method') == 'paypal') {
            //return redirect('paypal.checkout');
            $order->payment_method = 'paypal';
        }

        //$order->status ='pending';
        $order->save();

        //save order items
        $cartItems = \Cart::session(auth()->id())->getContent();

        foreach ($cartItems as $item) {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        //payment
        if (request('payment_method') == 'paypal') {
            //return redirect('paypal.checkout');
            return redirect('checkout');
           
        }
        //empty cart

           \Cart::session(auth()->id())->clear();


        //
        //return "order completed, thank you for order";
        //return back();

        return redirect('shipments')->withMessage('สั่งซื้อสินค้าสำเร็จ');
        //dd('order created',$order);
    }
    public function edit($id)
    {
        $orders = Order::find($id);
        return view('seller.order.edit')->with('order', $orders);
        //dd($orders);
        //return view('seller.order.delivered')->with($orders);
        //$orders = Order::find($id);
        //return view('seller.order.delivered', compact('orders'));
    }

    public function update(Request $request, $id)
    {

        $order = Order::find($id);
        $this->validate($request, [
            'status' => 'required|in:pending,processing,completed,decline'
        ]);
       
        $order->status = $request->status;
        // return $request->status;
        //$status=
       // $order->save();
        if($order->save()){
            request()->session()->flash('success','Successfully updated order');
        }
        else{
            request()->session()->flash('error','Error while updating order');
        }
        return redirect('seller/orders');
       
       
    }
        public function destroy($id)
        {
            $order=Order::find($id);
            if($order){
                $status=$order->delete();
                if($status){
                    request()->session()->flash('success','Order Successfully deleted');
                }
                else{
                    request()->session()->flash('error','Order can not deleted');
                }
                return redirect('seller/orders');
            }
            else{
                request()->session()->flash('error','Order can not found');
                return redirect()->back();
            }
        }
    



    public function search()
    {
        $search = $_GET['search'];
        $orders = Order::where('shipping_fullname', 'LIKE', '%' . $search . '%')->get();
        return view('shipments', compact('orders'));
    }
}
