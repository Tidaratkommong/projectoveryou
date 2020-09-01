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
        $data = Product::latest()->paginate(5);
        return view('product', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'product_id' => 'required',
            'product_name' => 'required',
            'product_delail' => 'required',
            'product_price' => 'required',
            'protype_id' => 'required',
            'product_img' => 'required|image|max:2084',
            'product_num' => 'required'
        ]);

        $image = $request->file('image');
        $new_name = rand().'.'.$image->
        getClientOriginalExtension();
        $image->move(public_path('images'),$new_name);
        $form_data=array(
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'product_delail' =>$request->product_delail,
            'product_price' => $request->product_price,
            'protype_id' => $request->protype_id,
            'product_img' => $new_name,
            'product_num' => $request->product_num
        );

        Product::create($form_data);
        return redirect('product')->whit('success','Data Added successfully'); 
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
