<?php

namespace App\Http\Controllers;

use App\User;
use BotMan\BotMan\Messages\Attachments\Contact;
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
    public function index()
    { 
        $users = User::latest()->paginate(10);
        return view('admin.index_user', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('admin.create_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',  
            'telephone' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
        ]);
       
        User::create($request->all());
        return redirect('admin')->with('success', 'new user created successfully');    
    }


    public function edit($id)
    {

        $users = User::find($id);
        return view('admin.edit_user', compact('users'));    
    }


    public function update(Request $request, $id)
    {
      $request->validate([
        'name' => 'required',
        'address' => 'required',
        'telephone' => 'required',
        'email' => 'required',

      ]);
      $users = User::find($id);
      $users->name = $request->get('name');
      $users->address = $request->get('address');
      $users->telephone = $request->get('telephone');
      $users->email = $request->get('email');
      $users->save();
      return redirect('admin')->with('success', 'แก้ไขข้อมูลสมาชิกสำเร็จ');  

      //return redirect()->route('admin.edit_user')
                      //->with('success', 'User updated successfully');
    }
    
          //return redirect()->route('admin.index_user')
                          //->with('success', ' User updated successfully');
       
    

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('admin')
                        ->with('success', ' User deleted successfully');
    }


    /*public function registeredDelete($id)
    {
       $users = User::findOrFail($id);
        $users ->delete();
        return redirect('admin/index_user')->with('success','Your Data is Deleted');

   }*/
    
  
}
