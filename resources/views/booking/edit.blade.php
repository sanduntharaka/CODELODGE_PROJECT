@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Department</h6>
        <a href="{{url('admin/booking')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/booking/'.$data->id)}}" method="post">
                @csrf
                @method('put')
            <table class="table table-bordered" >
                
                <tr>
                    <th>Room No</th>
                    <td><select name="room_id" class="form-control">
                            @foreach($rooms as $r)
                            <option @if($data->title==$r->id) selected @endif value="{{$r->id}}">{{$r->title}}</option>
                            @endforeach 
                    </select></td>
                    
                </tr>
                <tr>
                    <th>CheckIn Date</th>
                    <td><input value="{{$data->checkin_date}}" name="checkin_date" class="form-control" type="date"></td>
                </tr>
                <tr>
                    <th>CheckOut Date</th>
                    <td><input value="{{$data->checkout_date}}" name="checkout_date" class="form-control" type="date"></td>
                </tr>
                <tr>
                    <th>Reference</th>
                    <td><input value="{{$data->ref}}" name="ref" class="form-control" type="text"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->



@endsection