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


        $product = Product::latest()->paginate(5);
        return view('product.index_product', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->forget('success');
        return view('product.create_product');
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

            'product_id' =>  'required',
            'product_name' =>  'required',
            'product_price' =>  'required|numeric',
            'product_detail' =>  'required',
            'product_num' =>  'required',
            'product_img' =>  'required|mimes:jpeg,jpg,png'

        ], [

            'product_id.required' => 'กรุณากรอกรหัสสินค้า',
            'product_name.required' => 'กรุณากรอกชื่อสินค้า',
            'product_detail.required' => 'กรุณากรอรายละเอียดสินค้า',
            'product_price.required' => 'กรุณากรอกราคา',
            'product_num.required' => 'กรุณากรอกจำนวนสินค้า',
            'product_price.numeric' => 'กรุณากรอกราคาเป็นตัวเลขเท่านั้น',
            'product_img.required' => 'กรุณากรอกรูปภาพ',
            'product_img.mimes' => 'ไฟล์ที่เลือกต้องนามสกุล jpeg, jpg, png เท่านั้น'

        ]);


        // Move imge to folder
        $path = $request->product_img->store('public/imaproduct');
        //return public/imaproduct/filename

        //chand path befor insert into DB
        $replace_path = str_replace("public", "storage", $path);



        //Add to DB

        $product = new Product;
        $product->product_id = $request->product_id;
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
            return view('product.create_product');
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
        //$product = Product::findOrFail($id);
       // return view('product.view_product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //return view('product.edit_product');
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
