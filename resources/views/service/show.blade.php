@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Service Details</h6>
        <a href="{{url('admin/service')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" >
                <tr>
                    <th>Title</th>
                    <td>{{$data->title}}</td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td>
                        <p style="display:none">{{$myIMG = Str::remove('public',$data->photo)}}</p>
                        <img width="80" src="{{asset('storage/'.$myIMG)}}" alt="Image"/>
                    </td>
                </tr>
                <tr>
                    <th>Small Detail</th>
                    <td>{{$data->small_desc}}</td>
                </tr>
                <tr>
                    <th>Full Detail</th>
                    <td>{{$data->detail_desc}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection