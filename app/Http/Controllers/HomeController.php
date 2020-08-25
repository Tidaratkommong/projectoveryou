<?php

namespace App\Http\Controllers;

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
        if(auth()->user()->hasRole('admin')){
            $user=auth()->user();
            return view('adminhome');      
        }else{
            return view('welcome');
        }
        
    }
}
