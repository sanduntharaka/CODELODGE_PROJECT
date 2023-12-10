@extends('frontlayout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$data->full_name}} Detail</h6>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <form enctype="multipart/form-data" action="{{url('admin/booking')}}" method="post">
            <table class="table table-bordered" >
                <tr>
                    <th>ID</th>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>{{$data->customer->full_name}}</td>
                </tr>
                <tr>
                    <th>Room No</th>
                    <td>{{$data->room->title}}</td>
                </tr>
                <tr>
                    <th>Room Type</th>
                    <td>{{$data->room->Roomtype->title}}</td>
                </tr>
                <tr>
                    <th>CheckIn Date</th>
                    <td>{{$data->checkin_date}}</td>
                </tr>
                <tr>
                    <th>CheckOut Date</th>
                    <td>{{$data->checkout_date}}</td>
                </tr>
                <tr>
                    <th>Reference</th>
                    <td>{{$data->ref}}</td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection