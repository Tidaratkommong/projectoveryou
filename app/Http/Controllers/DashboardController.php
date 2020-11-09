<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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


    /*public function registeredDelete($id)
    {
       $users = User::findOrFail($id);
        $users ->delete();
        return redirect('admin/index_user')->with('success','Your Data is Deleted');

   }*/
    
  
}
