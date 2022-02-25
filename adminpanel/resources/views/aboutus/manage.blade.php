@extends('main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">About US</h3>
        </div>
        <form action="/aboutus" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" value="{{$about->title ?? ''}}" class="form-control" id="exampleInputEmail1" placeholder="Title">
            </div>

            <div class="form-group">
              <label>Description.</label>
              <textarea name="description" class="form-control" rows="6" placeholder="Description ...">{{$about->description ?? ''}}</textarea>
            </div>            
            <div class="form-group">
              <label for="exampleInputFile">About Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="img_path" class="custom-file-input" id="img_path">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="insertproduct">Save</button>
          </div>
        </form>
@endsection