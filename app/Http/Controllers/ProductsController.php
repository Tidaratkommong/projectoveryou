<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index')->with('product',$product);
            

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $request->session()->forget('success');
      return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
         $request->validate([
            'product_name' =>  'required',
            'product_price' =>  'required',
            'product_detail' =>  'required',
            'product_num' =>  'required',
            'product_img'=>  'required'

        ]);
        //Add to DB

        $product =new Product;
         $product->product_name = $request->product_name;
         $product->product_detail = $request->product_detail;
         $product->product_price = $request->product_price;
         $product->product_num = $request->product_num;
         $product->product_img = '';
         
         if($product->save()){
             $request->session()->flash('success','เพิ่ม'. $product->product_name.'สำเร็จ');
             return view('product.index');
         }else{
            $request->session()->flash('success','เพิ่ม'. $product->product_name.'ไม่สำเร็จ');
            return view('product.create');

         }
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