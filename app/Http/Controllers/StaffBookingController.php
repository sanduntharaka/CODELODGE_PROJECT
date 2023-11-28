<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Booking;

class StaffBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('booking.staffindex',['data'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers=Customer::all();
        return view('booking.staffcreate',['data'=>$customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'room_id' => 'required',
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'total_adults' => 'required',
        ]);

        $data = new Booking;
        $data->customer_id=$request->customer_id;
        $data->room_id=$request->room_id;
        $data->checkin_date=$request->checkin_date;
        $data->checkout_date=$request->checkout_date;
        $data->total_adults=$request->total_adults;
        $data->total_children=$request->total_children;
        if($request->ref=='front'){
            $data->ref='front';
        }else{
            $data->ref='admin';
        }
        $data->save();

        if($request->ref=='front')
        {
            return redirect('booking')->with('success', 'Booking has been created.');
        }

        return redirect('staff/booking/create')->with('success', 'Data has been added.');
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
