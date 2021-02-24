<?php

namespace App\Http\Controllers;

use App\Paypal;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cart = \Cart::session(auth()->id());
        //dd($cart->getContent());
       //return redirect()->route('paypal.index');
    }
    public function checkout()
    {
        return view('checkout');
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
            'paypal_img' => 'required',
            'date' => 'required',
            'bank_form' => 'required',
            'bank_go' => 'required'
        ]);


          $paypal = new Paypal();  
          
          $paypal->paypal_img = $request->input('paypal_img');
          //$paypal->date = $request->date;
          //$paypal->bank_form = $request->bank_form;
          //$paypal->bank_go = $request->bank_go;
          $paypal->date = $request->input('date');
          $paypal->bank_form = $request->input('bank_form');
          $paypal->bank_go = $request->input('bank_go');
          
       

          //$paypal->grand_total = \Cart::session(auth()->id())->getTotal();
         // $paypal->item_count = \Cart::session(auth()->id())->getContent()->count();
        $paypal->user_id = auth()->id();
        
        //$order->status ='pending';
        $paypal->save();

        //save order items
        $cartItems = \Cart::session(auth()->id())->getContent();

       foreach($cartItems as $item){
           //$paypal->items()->attach($item->id,['price'=>$item->price,'quantity'=>$item->quantity]);

       }
       //empty cart
          \Cart::session(auth()->id())->clear();

        return redirect('shipments')->withMessage('สั่งซื้อสินค้าสำเร็จ');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
