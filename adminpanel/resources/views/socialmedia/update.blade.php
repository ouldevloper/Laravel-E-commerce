@extends('main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">Social Media</h3>
        </div>
        <form action="/socialmedia/update/{{$social->id}}" method="post">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Link</label>
              <input type="url" value="{{$social->link}}" name="link" class="form-control" id="exampleInputEmail1" placeholder="link">
            </div>              
              <div class="form-group">
                <label>Icon</label>
                <select class="form-control select2" name="icon" style="width: 100%;">
                    <option value="{{$social->icon_path}}" selected> .</option>
                    <option value="fab fa-facebook"> facebook</option>
                    <option value="fab fa-linkedin"> linkedin</option>
                    <option value="fab fa-twitter">  twitter </option>
                    <option value="fab fa-instagram">instagram</option>
                    <option value="fab fa-youtube">  youtube </option>
                </select>
              </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="new">Submit</button>
          </div>
        </form>
@endsection

