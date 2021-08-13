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
                                <label for="">Staff Role</label>
                                <select name="role" id="" required class="form-control">
                                    <option value="" disabled selected>Select</option>
                                    @foreach(\App\Roles::where('id','>',1)->get() as $value)
                                        <option value="{{$value->id}}">{{ucwords($value->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" required placeholder="Password" name="password" id="">
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