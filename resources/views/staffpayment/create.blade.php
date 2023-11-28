@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Staff Payment</h6>
        <a href="{{url('admin/staff')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/staff/payment/'.$staff_id)}}" method="post">
                @csrf
            <table class="table table-bordered" >
                <tr>
                    <th>Amount</th>
                    <td><input name="amount" type="text" class="form-control" /></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><input name="amount_date" class="form-control" type="date" /></td>
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