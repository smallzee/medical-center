@extends('users.layout')

@push('content')


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

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-bd cardbox">
            <div class="panel-body">
                <div class="statistic-box">
                    <h2><span class="count-number">
                             {{\App\Students::count()}}
                        </span>
                    </h2>
                </div>
                <div class="items pull-left">
                    <i class="fa fa-users fa-2x"></i>
                    <h4>All Students </h4>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>{{ "Recent Students" }}</h4>
                </div>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Matric Number</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Matric Number</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\Students::orderBy('id','desc')->limit(5)->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{strtoupper($value->matric_number)}}</td>
                                <td>{{$value->email_address}}</td>
                                <td>{{$value->full_name}}</td>
                                <td>{{$value->phone_number}}</td>
                                <td>{{$value->gender}}</td>
                                <td>{{ ucwords($value->department->name) }}</td>
                                <td>{{ strtoupper($value->level) }}</td>
                                <td>{{$value->created_at}}</td>
                                <td><a href="{{url('user/view-student/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endpush