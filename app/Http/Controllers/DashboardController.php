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
    public function registered()
    { 
        $users = User::latest()->paginate(10);
        return view('users.index_user', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('users.create_user');
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
        return redirect()->route('users.index_user')
                        ->with('success', 'new biodata created successfully');
    }


    public function edit()
    {
        $users = User::find($id);
        return view('users.edit_user', compact('users'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',  
            'telephone' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
          ]);
          $users = User::find($id);
          $users->name = $request->get('name');
          $users->telephone = $request->get('telephone');
          $users->email = $request->get('email');
          $users->address = $request->get('address');
          $users->save();
          return redirect()->route('users.index_user')
                          ->with('success', 'Biodata siswa updated successfully');
       
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users.index_user')
                        ->with('success', 'Biodata siswa deleted successfully');
    }


    /*public function registeredDelete($id)
    {
       $users = User::findOrFail($id);
        $users ->delete();
        return redirect('admin/index_user')->with('success','Your Data is Deleted');

   }*/
    
  
}
