@extends('layouts.admin')
@section('title','All Teacher')
@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">

            <div class="row">
              <div class="col-md-8">
                <h3 class="panel-title"><i class="fa fa-cubes"></i> All Teacher Information</h3>
              </div>
              <div class="col-md-4 text-right">
                  @if(Auth::user()->role_id!='3')
                <a href="{{url('admin/teacher/create')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> Add Teacher</a>
                @endif
              </div>
              <div class="clearfix">
            </div>
            </div>

          </div>

          @if(Session::has('success'))
            <script>
                swal({ title: "Success!", text: "Teacher Information Delete Success.", timer:3000, icon: "success",});
            </script>
            @endif

            @if(Session::has('error'))
            <script>
                swal({ title: "Opps!", text: "Teacher Information failed.", timer:3000, icon: "warning",});
            </script>
            @endif
          <div class="panel-body">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Initial</th>
                                  @if(Auth::user()->role_id!='3')
                                  <th>Manage</th>
                                  @endif
                              </tr>
                          </thead>

                          <tbody>

                            @foreach ($teachers as $teacher)
                              <tr>
                                  <td>{{$teacher->name}}</td>
                                  <td>{{$teacher->email}}</td>
                                  <td>{{$teacher->initial}}</td>

                                  @if(Auth::user()->role_id!='3')
                                  <td>
                                    <!-- <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a> -->

                                    <a class="teacherdelete" data-url="{{url('admin/teacher/'.$teacher->id)}}" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash fa-lg"></i></a>

                                  </td>
                                  @endif
                              </tr>
                              @endforeach

                          </tbody>
                      </table>

                  </div>
              </div>
          </div>

          <!-- <div class="panel-footer">
            <a href="#" class="btn btn-sm btn-primary">PRINT</a>
            <a href="#" class="btn btn-sm btn-warning">PDF</a>
            <a href="#" class="btn btn-sm btn-info">CSV</a>
          </div> -->

      </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post" id="teacherdelete">
        @csrf
        @method('delete')
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <p class="text-danger">Are you sure!</p></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-danger">Do you really want to permanently delete these records?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
