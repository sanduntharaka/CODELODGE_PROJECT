<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
use App\Models\Service;

class HomeController extends Controller
{
    //Home Page
    function home(){
        $services=Service::all();
        $roomTypes=RoomType::all();
        return view('home', ['roomTypes'=>$roomTypes, 'services'=>$services]);
    }

    function service(){
        $services = Service::all();
        return view('service',['services'=>$services]);
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }
}
