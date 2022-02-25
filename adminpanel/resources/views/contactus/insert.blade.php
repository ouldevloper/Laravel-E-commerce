@extends('main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">Product</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title">
            </div>
            <div class="form-group">
              <label>Description.</label>
              <textarea class="form-control" rows="3" placeholder="Description ..."></textarea>
            </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control select2" style="width: 100%;">
                  <option>Alabama</option>
                </select>
              </div>

              <div class="form-group">
                <label>Price</label>
                <div class="input-group mb-3">
                  <input type="number" class="form-control" min="0">
                  <div class="input-group-append">
                    <span class="input-group-text"> $ </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Quantity</label>
                <div class="input-group mb-3">
                  <input type="number" class="form-control" min="0"> 
                </div>
              </div>
            <div class="form-group">
              <label for="exampleInputFile">Product Images</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="images" class="custom-file-input" id="productimages" multiple>
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="insertproduct">Submit</button>
          </div>
        </form>
@endsection