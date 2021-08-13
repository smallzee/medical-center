@extends('admin.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd">
            <div class="twt-feed blue-bg">
                <div class="fa fa-user wtt-mark"></div>
                <a href="#">
                    <img alt="" src="{{url('assets/admin/dist/img/avatar.png')}}">
                </a>
                <h1>{{ ucwords($user->full_name) }}</h1>
                <p>{{$user->email_address}}</p>
                <p>Staff Roll : {{ \App\Roles::where('id',$user->role_id)->first()->name  }}</p>
            </div>
        </div>
    </div>

@endpush