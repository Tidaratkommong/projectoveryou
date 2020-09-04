<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }


    public function update(Request $request)
    {
        $user =User::find(Auth::user()->id);
 
        if($user){
            $validate = null;
            if(Auth::user()->email == $request['email']){
            $validate =$request->validate([
               'username' => 'required',
               'fname' => 'required',
               'lname' => 'required',
               'phone' => 'required',
               'email' => 'required|email'
            ]);

            }else{
                $validate =$request->validate([
                    'username' => 'required',
                    'fname' => 'required',
                    'lname' => 'required',
                    'phone' => 'required',
                    'email' => 'required|email|unique:users'
                 ]);

            }
            if ($validate){
            $user->username =$request['username'];
            $user->fname =$request['fname'];
            $user->lname =$request['lname'];
            $user->phone =$request['phone'];
            $user->email =$request['email'];

            $user->save();
            $request->session()->flash('success',' Your detals have now been updated !');
            return redirect()->back();
            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }
    }


    public function passwordEdit()
    {
        //
    }
    public function passwordUpdate()
    {
        //
    }

    public function profile($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('user.profile')->withUser($user);
        } else {
            return redirect()->back();
        }
    }
}
