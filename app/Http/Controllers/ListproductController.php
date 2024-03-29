<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use Illuminate\Support\Facades\Auth;

class ListproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product =Product::find(Auth::all());
        //return view('welcome', compact('product'));
        $product = Product::inRandomOrder()->take(12)->get();
        $reviewAlsoLike = Review::inRandomOrder()->take(5)->get();

        return view('welcome')->with([
            'product' => $product,
            'reviewAlsoLike' => $reviewAlsoLike,
 
        ]);
       // return view('welcome', compact('product'));
       // {{ Auth::user()->name }}


      // $product = Product::findOrFail($id);
      // $reviewAlsoLike = Review::where('id', '!=', $id)->inRandomOrder()->take(4)->get();


      // return view('welcome')->with([
         //  'product' => $product,
         //  'reviewAlsoLike' => $reviewAlsoLike,

      // ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('welcome', compact('product'));

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
    
    public function search()
    {
      
        $search = $_GET['search'];
        $product = Product::where('product_name','LIKE','%'.$search.'%')
                   ->orWhere( 'product_detail', 'LIKE', '%' . $search . '%' )
                   ->orWhere( 'product_price', 'LIKE', '%' . $search . '%' )
                   ->orWhere( 'product_type', 'LIKE', '%' . $search . '%' )
                   ->get();

        $reviewAlsoLike = Review::inRandomOrder()->take(5)->get();
        return view('welcome', compact('product'))->with([
            'product' => $product,
            'reviewAlsoLike' => $reviewAlsoLike,
 
        ]);
         

    }
}
