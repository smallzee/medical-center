@extends('users.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>{{$page_title}}</h4>
                </div>
            </div>
            <div class="panel-body">


                <form action="{{url('user/update_password')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Old Password</label>
                        <input type="password" class="form-control" required placeholder="Old Password" name="password" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" required placeholder="New Password" name="npassword" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endpush