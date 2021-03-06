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
             'img' => $product->product_img,
             'description' => $product->product_detail,
             'price' => $product->product_price,
             'quantity' => 1,
             'attributes' => array(),
             'associatedModel' => $product
         ));

        return redirect()->route('cart.index') ;

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
  
    public function checkout()
    {
        return view('cart.checkout');
    }

    
    

    
}
