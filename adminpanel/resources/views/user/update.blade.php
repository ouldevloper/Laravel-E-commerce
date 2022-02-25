@extends('main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">User</h3>
        </div>
        <form action="/user/update/{{$user->id}}" method="post">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1Email">Full Name</label>
              <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" value="{{$user->username}}" class="form-control" id="exampleInputEmail1" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Role</label>
              <select class="form-control select2" name="role" style="width: 100%;">
                  <option value="{{$user->role}}" selected></option>
                  <option value="1">Admin</option>
                  <option value="2">employer</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="new">Submit</button>
          </div>
        </form>
@endsection