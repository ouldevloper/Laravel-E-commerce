@extends('main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">User</h3>
        </div>
        <form action="/user/insert" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1Email">Full Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
            </div>
              <div class="form-group">
                <label>Role</label>
                <select class="form-control select2" name="role" style="width: 100%;">
                  <option value="1">Admin</option>
                  <option value="2">employer</option>
                </select>
              </div>
            <div class="form-group">
              <label for="exampleInputFile">Profile Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="img_path" class="custom-file-input" id="userimage">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="new">Submit</button>
          </div>
        </form>
@endsection