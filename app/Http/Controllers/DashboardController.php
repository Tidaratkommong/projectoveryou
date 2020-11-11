<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registered()
    {
        
        $users = User::latest()->paginate(10);
        return view('admin.index_user', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('admin.edit_user')->withUser($user);
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

    /*public function registeredDelete($id)
    {
       $users = User::findOrFail($id);
        $users ->delete();
        return redirect('admin/index_user')->with('success','Your Data is Deleted');

   }*/
    
  
}
