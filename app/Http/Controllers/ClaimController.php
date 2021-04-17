<?php

namespace App\Http\Controllers;

use App\Claim;
use App\Paypal;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claim = Claim::all();
        return view('claim.index',compact('claim'));
        //$claim = Claim::latest()->paginate(5);
        //return view('claim.index',compact('claim'))
            //    ->with('i',(request()->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('claim.claim');
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
            'name'    =>  'required',
            'address'     =>  'required',
            'telephone'     =>  'required',
            'email'     =>  'required',
            'detail'     =>  'required',
            'product_name'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');
        $user_id = auth()->id();
        
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'       =>   $request->name,
            'address'        =>   $request->address,
            'telephone'        =>   $request->telephone,
            'product_name'        =>   $request->product_name,
            'email'        =>   $request->email,
            'detail'        =>   $request->detail,
            'image'            =>   $new_name,
            'user_id'  => $user_id
           
        );

        Claim::create($form_data);
        //$paypal->save();

        return redirect('how-to-return')->with('success', 'Data Added successfully.');
        //return  view('claim.claim')->with('success', 'Data Added successfully.');
       // return view('claim.claim')-
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $claim = Claim::findOrFail($id);
        return view('claim.view', compact('claim'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $claim = Claim::find($id);
        return view('claim.edit')->with('claim', $claim);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $claim = Claim::find($id);
        $this->validate($request, [
            'status' => 'required|in:pending,processing,completed,decline'
        ]);
       
        $claim->status = $request->status;
        // return $request->status;
        //$status=
       // $order->save();
        if($claim->save()){
            request()->session()->flash('success','Successfully updated status');
        }
        else{
            request()->session()->flash('error','Error while updating order');
        }
        return redirect('claim');
       
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Claim $claim)
    {
        //
    }
}
