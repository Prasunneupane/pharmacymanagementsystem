@extends('layout/layout')
@section('page_title','User Register')
@section('user','active')
@section('user_show','show')
@section('user_register_select','active')
@section('additional_css')
<link rel="stylesheet" href="{{asset('assets/css/icheck.min.css')}}">
@endsection
@section('content')

<div class="animated fadeIn">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>User Registration </strong> Form
        </div>
        <div class="card-body card-block">
            <form action="{{route('insertUpdateUser')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <input type="hidden" name="id" value="0">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-name" class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-name" name="name" placeholder="Enter Name..." class="form-control" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-username" class=" form-control-label">UserName</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-username" name="username" placeholder="Enter UserName..." class="form-control" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="hf-password" name="password" placeholder="Enter Password..." class="form-control" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-confirmpassword" class=" form-control-label">Confirm Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="hf-confirmpassword" name="confirmpassword" placeholder="Enter Password Again..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="hf-email" name="email" placeholder="Enter Email..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-phone" class=" form-control-label">Phone</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-phone" name="phone" maxlength="10" placeholder="Enter phone..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-image" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="hf-image" name="image" placeholder="Choose Image" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-image" class=" form-control-label">User Type</label></div>
                    <div class="col-12 col-md-9">
                    <select name="user_type" id="user_type" class="form-control" required>
                    @foreach($userRole as $role) 
                        <option value="{{$role->id}}">{{$role->user_role}}</option>
                    @endforeach
                    </select></div>
                </div>
                <div class="row form-group">
                    <label class="col col-md-3 col-sm-3 col-xs-12">Is Active</label>
                    <div class="col col-md-9">
                        {{-- <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="isactive" value="true" class="form-check-input" checked>Active
                            </label>
                            <label for="inline-radio2" class="form-check-label " style="margin-left: 8%;">
                                <input type="radio" id="inline-radio2" name="isactive" value="false" class="form-check-input">InActive
                            </label>
                            
                        </div> --}}
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary1" value="true" name="isactive" checked="">
                              <label for="radioPrimary1">Active
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary2"  value="false" name="isactive">
                              <label for="radioPrimary2">InActive
                              </label>
                            </div>
                            
                          </div>
                    </div>
                  </div>
            
        </div>
        <div class="clearfix"></div>
        <div class="" style="margin-left:28%;margin-bottom:3%;">
            <button type="submit" class="btn btn-primary btn-sm">
                Submit
            </button>
            
        </div>
    </form>
    </div>

</div>

</div>
</div>


@endsection