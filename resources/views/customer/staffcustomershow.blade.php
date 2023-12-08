@extends('stafflayout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Students</h6>
        <a href="{{url('staff/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" >
                <tr>
                    <th>FullName</th>
                    <td>{{$data->full_name}}</td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td><p style="display:none">{{$myIMG = Str::remove('public',$data->photo)}}</p>
                        <img width="80" src="{{asset('storage/'.$myIMG)}}" alt="Image"/></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{$data->mobile}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$data->address}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection