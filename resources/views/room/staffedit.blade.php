@extends('stafflayout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Room</h6>
        <a href="{{url('staff/room')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('staff/room/'.$data->id)}}" method="post">
                @csrf
                @method('put')
            <table class="table table-bordered" >
                <tr>
                    <th>Select Room Type</th>
                    <td>
                        <select name="rt_id" class="form-control">
                            <option value="0">---Select---</option>
                            @foreach($roomtypes as $rt)
                            <option @if($data->roomtype_id==$rt->id) selected @endif value="{{$rt->id}}">{{$rt->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input value="{{$data->title}}" name="title" type="text" class="form-control" /></td>
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