@extends('layouts.admin')
@section('title','All Teacher')
@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">

            <div class="row">
              <div class="col-md-8">
                <h3 class="panel-title"><i class="fa fa-cubes"></i> All Teacher List</h3>
              </div>
              <div class="col-md-4 text-right">
                <!-- <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> User Registration</a> -->
              </div>
              <div class="clearfix">
            </div>
            </div>

          </div>
          <div class="panel-body">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Initial</th>
                                  <th>View Routine</th>
                              </tr>
                          </thead>

                          <tbody>

                            @foreach ($data as $value)
                              <tr>
                                  <td>{{$value->name}}</td>
                                  <td>{{$value->email}}</td>
                                  <td>{{$value->initial}}</td>
                                  <td>
                                    <a href="{{url('admin/counselling/'.$value->initial)}}"><i class="fa fa-plus-square fa-lg"></i></a>
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
