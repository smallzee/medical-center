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


                <form action="{{url('admin/create_new_staff')}}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-sm-12">
                           <div class="form-group">
                               <label for="">Matric Number</label>
                               <input type="text" class="form-control" required placeholder="Matric Number" name="matric_number" id="">
                           </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" name="email_address" class="form-control" required placeholder="Email Address" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" name="full_name" required placeholder="Full Name" class="form-control" id="">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" required placeholder="Phone Number" name="phone_number" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="" required class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Department</label>
                                <select name="department" class="form-control" required id="">
                                    @foreach(\App\Departments::orderBy('name')->get() as $value)
                                        <option value="{{$value->id}}"> {{ ucwords($value->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Level</label>
                                <select name="level" required id="" class="form-control">
                                    @foreach (array('nd 1 ft','nd 2 ft','nd 1 dpt','nd 2 dpt','nd rpt yr1','nd rpt yr2','nd rpt yr3','hnd 1 ft','hnd 2 ft','hnd 1 dpt','hnd 2 dpt') as $value)
                                        <option value="{{strtoupper($value)}}"> {{ strtoupper($value) }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endpush