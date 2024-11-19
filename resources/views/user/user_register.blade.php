@extends('layout/layout')
@section('page_title','User Register')
@section('user','active')
@section('user_show','show')
@section('user_register_select','active')
@section('content')
<style>
 
.checkbox label, .radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}

.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: absolute;
    margin-top: 4px \9;
    margin-left: -20px;
}
.iradio_flat-green.checked {
    background-position: -110px 0;
}
.icheckbox_flat-green, .iradio_flat-green {
    display: inline-block;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    width: 20px;
    height: 20px;
    background: url(green.png) no-repeat;
    border: none;
    cursor: pointer;
}

</style>
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
                    <div class="col-12 col-md-9"><input type="text" id="hf-name" name="hf-name" placeholder="Enter Name..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-username" class=" form-control-label">UserName</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-username" name="hf-username" placeholder="Enter UserName..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-confirmpassword" class=" form-control-label">Confirm Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="hf-confirmpassword" name="hf-confirmpassword" placeholder="Enter Password Again..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-phone" class=" form-control-label">Phone</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-phone" name="hf-phone" maxlength="10" placeholder="Enter phone..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-image" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="hf-image" name="hf-image" placeholder="Choose Image" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <label class="col col-md-3 col-sm-3 col-xs-12">Is Active</label>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="inline-radios" value="true" class="form-check-input" checked>Active
                            </label>
                            <label for="inline-radio2" class="form-check-label " style="margin-left: 8%;">
                                <input type="radio" id="inline-radio2" name="inline-radios" value="false" class="form-check-input">InActive
                            </label>
                            
                        </div>
                    </div>
                  </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="" style="margin-left:28%;margin-bottom:3%;">
            <button type="submit" class="btn btn-primary btn-sm">
                Submit
            </button>
            
        </div>
    </div>

</div>

</div>
</div>


@endsection