@extends('layouts.admin')
@section('title','All Student')
@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">

            <div class="row">
              <div class="col-md-8">
                <h3 class="panel-title"><i class="fa fa-cubes"></i> All Student Information</h3>
              </div>
              <div class="col-md-4 text-right">
                <!-- <a href="{{url('admin/user/create')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> User Registration</a> -->
              </div>
              <div class="clearfix">
            </div>
            </div>
          </div>

              @if(Session::has('success'))
              <script>
                  swal({ title: "Success!", text: "Request approved Successfull.", timer:3000, icon: "success",});
              </script>
              @endif

              @if(Session::has('error'))
              <script>
                  swal({ title: "Opps!", text: "Registration failed.", timer:3000, icon: "warning",});
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
                                  <th>Phone</th>
                                  <th>User Role</th>
                                  <!-- <th>Status</th> -->
                                  <!-- <th>Time</th> -->
                                  <th>Send Message</th>
                              </tr>
                          </thead>


                          <tbody>

                            @foreach ($allUser as $value)
                              <tr>
                                  <td>{{$value->name}}</td>
                                  <td>{{$value->email}}</td>
                                  <td>{{$value->phone}}</td>
                                  <td>{{$value->UserRoleName->role_name}}</td>
                                  <!-- <td>
                                    @if($value->status==true)
                                      <span class="badge bg-primary">Approved</span>
                                    @else
                                      <span class="badge bg-danger">Pending</span>
                                    @endif
                                  </td> -->
                                  <!-- <td>{{$value->created_at}}</td> -->
                                  <td>
                                    <a href="{{url('admin/teacherMessage/'.$value->id)}}"><i class="fa fa-check-square fa-lg"></i></a>
                                  </td>
                              </tr>
                            @endforeach

                          </tbody>
                      </table>

                  </div>
              </div>
          </div>

      </div>
  </div>
</div>

@endsection
