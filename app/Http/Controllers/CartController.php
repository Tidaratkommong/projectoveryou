<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add(Product  $product)
    {
         //dd($product);
         //add the product to cart

         \Cart::session(auth()->id())->add(array(
             'id' => $product->id,
             'name' => $product->product_name,
             'price' => $product->product_price,
             'quantity' => 1,
             'attributes' => array(),
             'associatedModel' => $product
         ));

         return redirect()->route('cart.index');

    }
    public function index()
    {
        //$cart = Cart::all();
        $cartItems =\Cart::session(auth()->id())->getContent();
       return view('cart.index',compact('cartItems'));
    }

    public function destroy($itemId)
    {
        //$cart = Cart::all();
        \Cart::session(auth()->id())->remove($itemId);
       return back();
    }

    public function update($rowId)
    {
        //$cart = Cart::all();
        \Cart::session(auth()->id())->update($rowId,[

            'quantity' => array(
                'relative' =>false,
                'value' => request('quantity')
            )
            

        ]);
        return back();
       
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

        // $duplicates = Cart::search(function ($cartIteme, $rowId) use ($request){
        //      return $cartIteme->id === $request->id;
        // });

        // if($duplicates->isNotEmpty()){
        //     return redirect()->route('cart.index');
        // }
        // Cart::add($request->id, $request->product_name, 1, $request->product_price)
        //    ->associate('App\Product');

       // return view('cart.cart');
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
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
