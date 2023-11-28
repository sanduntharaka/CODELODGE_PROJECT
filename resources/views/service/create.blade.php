@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Service</h6>
        <a href="{{url('admin/service')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        @if($errors)
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/service')}}" enctype="multipart/form-data" method="post">
                @csrf
            <table class="table table-bordered" >
                <tr>
                    <th>Title <span class="text-danger">*</span></th>
                    <td><input name="title" type="text" class="form-control" /></td>
                </tr>
                <tr>
                    <th>Small Desc <span class="text-danger">*</span></th>
                    <td><textarea name="small_desc" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th>Detail Desc <span class="text-danger">*</span></th>
                    <td><textarea name="detail_desc" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th>Photo<span class="text-danger">*</span></th>
                    <td><input name="photo" type="file" /></td>
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