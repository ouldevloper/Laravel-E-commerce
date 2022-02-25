@extends('main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        <form action="/category/insert" method="post">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Label</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Label" name="label">
            </div>
            <div class="form-group">
              <label>Description.</label>
              <textarea class="form-control" rows="3" placeholder="Description ..." name="description"></textarea>
            </div>
              
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="insertproduct">Submit</button>
          </div>
        </form>
@endsection