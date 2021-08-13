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


                <form action="{{url('admin/update_role')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Staff Role Name</label>
                        <input type="text" value="{{$role->name}}" class="form-control" required placeholder="Schedule Name" name="name" id="">
                    </div>

                    <input type="hidden" name="id" value="{{$role->id}}" id="">

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endpush