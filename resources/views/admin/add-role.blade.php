@extends('admin.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>{{$page_title}}</h4>
                </div>
            </div>
            <div class="panel-body">


                <form action="{{url('admin/create_new_role')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Staff Role Name</label>
                        <input type="text" class="form-control" required placeholder="Staff Role Name" name="name" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endpush