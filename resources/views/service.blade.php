@extends('frontlayout')
@section('content')
<div class="container my-4">
        <h1 class="text-center border-bottom">Services</h1>
        @foreach($services as $service)
        <div class="row my-4">
            <div class="col-md-4">

                <p style="display:none">{{$myIMG = Str::remove('public',$service->photo)}}</p>
                <img class="img-thumbnail" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>

                <!--<img src="{{asset('images/room1.jpg')}}" class="img-thumbnail" alt="..." -->
            </div>
            <div class="col-md-8">
                <h3>{{$service->title}}</h3>
                <p>{{$service->small_desc}}</p>
                <p>{{$service->detail_desc}}</p>
                </p>
            </div>
        </div>
        @endforeach
    </div>
@endsection