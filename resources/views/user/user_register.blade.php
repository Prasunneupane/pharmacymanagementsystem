@extends('layout/layout')
@section('page_title','User Register')
@section('user','active')
@section('user_show','show')
@section('user_register_select','active')
@section('content')
<div class="animated fadeIn">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>User Registration </strong> Form
        </div>
        <div class="card-body card-block">
            <form action="#" method="post" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control"></div>
                </div>
            </form>
        </div>
        <div class="" style="margin-left:28%;margin-bottom:3%;">
            <button type="submit" class="btn btn-primary btn-sm">
                Submit
            </button>
            {{-- <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button> --}}
        </div>
    </div>

</div>

</div>
</div>


@endsection