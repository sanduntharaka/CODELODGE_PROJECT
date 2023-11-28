<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class StaffCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Customer::all();
        return view('customer.staffcustomerindex',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.staffcustomercreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
        ]);

        if($request->hasFile('photo')){
            $imgPath=$request->file('photo')->store('public/imgs');
        }else{
            $imgPath = "null";
        }

        $data = new Customer;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->photo=$imgPath;
        $data->save();

        $ref=$request->ref;
        if($ref=='front'){
            return redirect('register')->with('success', 'Data has been saved.');
        } 

        return redirect('staff/customer/create')->with('success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
