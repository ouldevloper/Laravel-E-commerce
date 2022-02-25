@extends('main.main')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          
         
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User's List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>FULL NAME</th>
                <th>USER NAME</th>
                <th>EMAIL</th>
                <th>ROLE(s)</th>
                <th>.</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($users as $item)
                    
                
              <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->name }}</td>
                <td>{{$item->username }}</td>
                <td>{{$item->email }}</td>
                <td>{{$item->role }}</td>
               
                <td>
                  <center>

                  
                  <a style="color: rgb(37, 155, 37);" href="/user/update/{{$item->id}}"> <i class="fas fa-edit"></i></a>
                  &nbsp;
                  &nbsp;
                  <a style="color: red;" onclick="if(confirm('Are you sure ?')==false) return;else document.location.href = '/user/delete/{{$item->id}}'; "> <i class="nav-icon fa fa-trash"></i></a>
                </center>
                </td>
              </tr>
              @endforeach
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection