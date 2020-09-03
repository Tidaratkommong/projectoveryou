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


        $product = Product::latest()->paginate(6);
        return view('product.index', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
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
            'product_img' =>  'required'

        ]);
        // Move imge to folder
        $path = $request->product_img->store('public/imaproduct');
        //return public/imaproduct/filename

        //chand path befor insert into DB
        $replace_path = str_replace("public","storage",$path);



        //Add to DB

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_price = $request->product_price;
        $product->product_num = $request->product_num;
        $product->product_img = $replace_path;

        if ($product->save()) {
            $request->session()->flash('success', 'เพิ่ม' . $product->product_name . 'สำเร็จ');
            return redirect('product');
        } else {
            $request->session()->flash('success', 'เพิ่ม' . $product->product_name . 'ไม่สำเร็จ');
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
        $product =Product::findOrFail($id);
        return view('product.viewproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
