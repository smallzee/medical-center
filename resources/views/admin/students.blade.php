@extends('admin.layout')

@push('content')

    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>{{ $page_title }}</h4>
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
                        @foreach(\App\Students::orderBy('id','desc')->get() as $value)
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
                                <td><a href="{{url('admin/view-student/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endpush