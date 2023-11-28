<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Room;

class StaffRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Room::all();
        return view('room.staffindex',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        return view('room.staffcreate',['roomtypes'=>$roomtypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Room;
        $data->roomtype_id=$request->rt_id;
        $data->title=$request->title;
        $data->save();

        return redirect('staff/room/create')->with('success', 'Data has been added.');
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
        $roomtypes = RoomType::all();
        $data=Room::find($id);
        return view('room.staffedit',['data'=>$data, 'roomtypes'=>$roomtypes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =Room::find($id);
        $data->roomtype_id=$request->rt_id;
        $data->title=$request->title;
        $data->save();

        return redirect('staff/room/'.$id.'/edit')->with('success', 'Data has been added.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
