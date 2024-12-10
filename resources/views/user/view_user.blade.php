@extends('layout/layout')
@section('page_title','Users List')
@section('user','active')
@section('user_show','show')
@section('user_view_select','active')
@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">User List</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered" id="userListTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userList as $users)
                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->username}}</td>
                                <td>{{$users->email}}</td>
                                <td>@if($users->image !="") 
                                    <img src="{{asset('storage/media/user/'.$users->image)}}">
                                    @else
                                    @endif
                                
                                </td>
                                <td><a href="{{route('edit-user',$users->id)}}"><button class="btn btn-sm btn-primary">Edit</button></a></td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
@section('js')
<script src="{{asset('assets/js/user-list.js')}}"></script>
@endsection