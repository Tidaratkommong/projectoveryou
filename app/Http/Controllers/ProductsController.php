<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(7);
        return view('product.product', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
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
            'product_name' =>  'required',
            'product_price' =>  'required|numeric',
            'product_detail' =>  'required',
            'product_type' =>  'required',
            'product_num' =>  'required',
            'product_img' =>  'required|mimes:jpeg,jpg,png'

        ], [

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
        $product->product_name = $request->product_name;
        $product->product_detail = $request->product_detail;
        $product->product_type = $request->product_type;
        $product->product_price = $request->product_price;
        $product->product_num = $request->product_num;
        $product->product_img = $replace_path;

        if ($product->save()) {
            $request->session()->flash('success', 'เพิ่ม' . $product->product_name  . 'สำเร็จ จำนวน'  . $product->product_num .  'ตัว');
            return redirect('products');
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
        $products = Product::findOrFail($id);
        return view('product.view_product', compact('products'));
    }
    // $product = Product::findOrFail($id);
    // return view('product.view_product', compact('product'));


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('product.edit_product', compact('products'));
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
        /* $request->validate([
           
            'product_name' =>  'required',
            'product_price' =>  'required|numeric',
            'product_detail' =>  'required',
            'product_type' =>  'required',
            'product_num' =>  'required',
            'product_img' =>  'mimes:jpeg,jpg,png'


        ], [

            'product_name.required' => 'กรุณากรอกชื่อสินค้า',
            'product_detail.required' => 'กรุณากรอรายละเอียดสินค้า',
            'product_price.required' => 'กรุณากรอกราคา',
            'product_num.required' => 'กรุณากรอกจำนวนสินค้า',
            'product_price.numeric' => 'กรุณากรอกราคาเป็นตัวเลขเท่านั้น',
            'product_img.required' => 'กรุณากรอกรูปภาพ',
            'product_img.mimes' => 'ไฟล์ที่เลือกต้องนามสกุล jpeg, jpg, png เท่านั้น'

        ]);  

        Product::find($id)->update($request->all());
        return redirect('product')->with('success', ' แก้ไขข้อมูลสินค้าสำเร็จ' );
*/


        $products =  Product::find($id);

        $this->validate($request, [
            'product_method' => 'required|in:_,new,hot,sale'
        ]);
        $products->product_name = $request->product_name;
        $products->product_detail = $request->product_detail;
        $products->product_type = $request->product_type;
        $products->product_price = $request->product_price;
        $products->product_num = $request->product_num;
        $products->product_method = $request->product_method;

        /*if ($request->hasFile('public/imaproduct'))
        {
            $file = $request->file('public/imaproduct');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $products->product_img = $name;
            $file->move(public_path().'public/imaproduct', $name);                       
        }*/


        // $image_name = rand() . '.' . $image->getClientOriginalExtension();
        //  $image->move(public_path('public/imaproduct'), $image_name);

        if ($request->hasFile('public/imaproduct')) {

            $file = $request->file('public/imaproduct');
            $extension = $file->getClientOriginalExtension();
            //$filename = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $filename = time() . '.' . $extension;
            $file->move(public_path() . 'public/imaproduct', $filename);
            // $file->move("public/imaproduct"('product_img'), $filename);
            $products->product_img = $filename;
        }

        if ($products->save()) {
            $request->session()->flash('success', ' แก้ไขข้อมูลสินค้าสำเร็จ');
            return redirect('products');
        } else {
            $request->session()->flash('success', 'แก้ไขข้อมูลสินค้าไม่สำเร็จ');
            return view('product.create_product');
        }

        /* $products->save();
        return redirect('product')->with('success', ' แก้ไขข้อมูลสินค้าสำเร็จ'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('products');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = DB::table('products')
                ->where('product_name', 'LIKE', '%' . $search . '%')
                ->orWhere( 'product_price', 'LIKE', '%' . $search . '%' )
                ->orWhere( 'product_type', 'LIKE', '%' . $search . '%' )
                ->orWhere( 'id', 'LIKE', '%' . $search . '%' )
                ->paginate(5);
        return view('product.product', compact('product'));
    }

   
}



