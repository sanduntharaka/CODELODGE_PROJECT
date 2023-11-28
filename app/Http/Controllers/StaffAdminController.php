<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\StaffAdmin;
use App\Models\Admin;
use App\Models\Staff;
use App\Models\Booking;
use Cookie;

class StaffAdminController extends Controller
{
    function staffdashboard(){
        //return view('staffdashboard');

        
            $bookings = Booking::selectRaw('count(id) as total_bookings, checkin_date')->groupBy('checkin_date')->get();
    
    
            $labels=[];
            $data=[];
            foreach($bookings as $booking){
                $labels[]=$booking['checkin_date'];
                $data[]=$booking['total_bookings'];
            }
    
            //for pie chart
            $rtbookings=DB::table('room_types as rt')
            ->join('rooms as r','r.roomtype_id','=', 'rt.id')
            ->join('bookings as b','b.room_id','=', 'r.id')
            ->select('rt.*','r.*','b.*',DB::raw('count(b.id) as total_bookings'))
            ->groupBy('r.roomtype_id')
            ->get();
    
            $plabels=[];
            $pdata=[];
            foreach($rtbookings as $rbooking){
                $plabels[]=$rbooking->detail;
                $pdata[]=$rbooking->total_bookings;
            }
            //end
    
            // echo '<prev>';
            // print_r($rtbookings);
    
            return view('staffdashboard', ['labels'=>$labels, 'data'=>$data, 'plabels'=>$plabels, 'pdata'=>$pdata]);
        
    }

    function login()
    {
        return view('stafflogin');
    }

    //Check Login
    function check_login(Request $request){
        $request->validate([
            'full_name' => 'required',
            'password' => 'required',
        ]);
        $admin = Staff::where(['full_name'=>$request->full_name, 'password'=>$request->password])->count();
        if($admin>0)
        {
            $adminData = Staff::where(['full_name'=>$request->full_name, 'password'=>$request->password])->get();
            session(['adminData'=>$adminData]);

            if($request->has('rememberme')){
                Cookie::queue('adminuser', $request->username,1440);
                Cookie::queue('adminpwd', $request->password,1440);
            }

            return redirect('staff/dashboard');
        }
        else{
            return redirect('staff/login')->with('msg', 'Invalid username/password');
        }
    }
}