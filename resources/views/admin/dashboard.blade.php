@extends('admin.layout')

@push('content')

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-bd cardbox">
            <div class="panel-body">
                <div class="statistic-box">
                    <h2><span class="count-number">
                            {{\App\User::where('role_id',1)->count()}}
                        </span>
                    </h2>
                </div>
                <div class="items pull-left">
                    <i class="fa fa-users fa-2x"></i>
                    <h4>All Admin </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-bd cardbox">
            <div class="panel-body">
                <div class="statistic-box">
                    <h2><span class="count-number">
                             {{\App\User::where('role_id','>',1)->count()}}
                        </span>
                    </h2>
                </div>
                <div class="items pull-left">
                    <i class="fa fa-users fa-2x"></i>
                    <h4>All Staff </h4>
                </div>
            </div>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>All Staff</h4>
                </div>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Staff Role</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Staff Role</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\User::where('role_id','>',1)->limit(5)->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$value->email_address}}</td>
                                <td>{{$value->phone_number}}</td>
                                <td>{{$value->gender}}</td>
                                <td>{{ \App\Roles::where('id',$value->role_id)->first()->name  }}</td>
                                <td>{{$value->created_at}}</td>
                                <td><a href="{{url('admin/view-staff/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endpush