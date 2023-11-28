<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
use App\Models\Service;

class TestController extends Controller
{
    //Home Page
    function testdashboard(){
        $services=Service::all();
        $roomTypes=RoomType::all();
        return view('testdashboard', ['roomTypes'=>$roomTypes, 'services'=>$services]);
    }

    function service(){
        $services = Service::all();
        return view('service',['services'=>$services]);
    }
}
