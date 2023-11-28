<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('booking.index',['data'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers=Customer::all();
        return view('booking.create',['data'=>$customers]);
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

        return redirect('admin/booking/create')->with('success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Booking::find($id);
        return view('booking.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms = Room::all();
        $roomtypes = RoomType::all();
        $data=Booking::find($id);
        return view('booking.edit',['data'=>$data, 'roomtypes' => $roomtypes, 'rooms' => $rooms]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Booking::find($id);
        $roomtypes = RoomType::all();

        
        $data->room_id=$request->room_id;
        $data->checkin_date=$request->checkin_date;
        $data->checkout_date=$request->checkout_date;
        $data->ref=$request->ref;
        $data->save();

        return redirect('admin/booking/'.$id.'/edit')->with('success', 'Data has been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Booking::where('id',$id)->delete();
        return redirect('admin/booking')->with('success', 'Data has been deleted.');
    }

    //check available rooms
    function available_rooms(Request $request, $checkin_date){
        $arooms=DB::SELECT("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE '$checkin_date' BETWEEN checkin_date AND checkout_date)");
        
        $data=[];
        foreach($arooms as $room){
            $roomTypes = RoomType::find($room->roomtype_id);
            $data[] = ['room'=>$room, 'roomtype'=>$roomTypes];
        }

        return response()->json(['data'=>$data]);
    }

    public function front_booking()
    {
        return view('front-booking');
    }

    public function staffbooking()
    {
        $bookings=Booking::all();
        return view('booking/staffindex',['data'=>$bookings]);
    }

    public function staffbookingcreate()
    {
        $customers=Customer::all();
        return view('booking/staffcreate',['data'=>$customers]);
    }

    public function staffadmindestroy(string $id)
    {
        Booking::where('id',$id)->delete();
        return redirect('booking/staffindex')->with('success', 'Data has been deleted.');
    }

}
