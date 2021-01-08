<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //auth()->user()->assignRole('admin'); //กำหนดเป็น admin
        //การตรวจเช็คบทบาท

        if (auth()->user()->isAdmin()) {
            return view('adminhome');
        } else {
            //return view('home');
            // return view('welcome');
            $product = Product::inRandomOrder()->take(8)->get();
            $reviewAlsoLike = Review::inRandomOrder()->take(5)->get();

            return view('home')->with([
                'product' => $product,
                'reviewAlsoLike' => $reviewAlsoLike,

            ]);
        }
    }
}
