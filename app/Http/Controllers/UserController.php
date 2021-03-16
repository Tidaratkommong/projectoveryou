<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('adminhome');
    }
    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email == $request['email']) {
                $validate = $request->validate([
                    'name' => 'required',
                    'address' => 'required',
                    'telephone' => 'required',
                    'email' => 'required',

                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required',
                    'telephone' => 'required',
                    'email' => 'required|email|unique:users',
                    'address' => 'required',
                ]);
            }
            if ($validate) {
                $user->name = $request['name'];
                $user->telephone = $request['telephone'];
                $user->email = $request['email'];
                $user->address = $request['address'];

                $user->save();
                $request->session()->flash('success', ' Your detals have now been updated !');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function passwordEdit()
    {
        if (Auth::user()) {
            return view('user.password');
        } else {
            return redirect()->back();
        }
    }


    public function passwordUpdate(Request $request)
    {
        $validate = $request->validate([
            'oldPassword' => 'required|min:8',
            'password' => 'required|min:8|required_with:password_confirmation'

        ]);

        $user = User::find(Auth::user()->id);

        if ($user) {
            if (Hash::check($request['oldPassword'], $user->password) && $validate) {
                $user->password = Hash::make($request['password']);
                $user->save();

                $request->session()->flash('success', ' Your password have been update!');
                return redirect()->back();
            } else {
                $request->session()->flash('error', ' The entered does not match your current password!');
                return redirect()->round('password.edit');
            }
        }
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

    public function getProfile($id)
    {     
        $user = User::find($id);
        $user = DB::table('users')
            ->join('orders', 'users.id', 'orders.id')
            ->join('order_items', 'orders.id', 'order_items.id')
            ->join('products', 'order_items.id', 'products.id')
            ->select('users.*', 'orders.*', 'order_items.*', 'products.*')
            ->where('users.id', $id)->first();
        return view('user.history', compact('user'));
    }
}
