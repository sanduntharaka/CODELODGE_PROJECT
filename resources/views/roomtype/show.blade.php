@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$data->title}}</h6>
        <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" >
                <tr>
                    <th>Title</th>
                    <td>{{$data->title}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{$data->price}}</td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td>{{$data->detail}}</td>
                </tr>
                <tr>
                    <th>Gallery Images</th>
                    <td>
                    <table class="table table-bordered mt-2" >
                            <tr>
                                @foreach($data->roomtypeimgs as $img)
                                <td class="imgcol{{$img->id}}">
                                    <p style="display:none">{{$myIMG = Str::remove('public',$img->img_src)}}</p>
                                    <img width="80" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>
                                    
                                </td>
                                @endforeach
                                <td></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection