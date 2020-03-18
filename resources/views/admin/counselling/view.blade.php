@extends('layouts.admin')
@foreach($data as $value)
@section('title', $value->name)
@endforeach
@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">

            <div class="row">
              <div class="col-md-8">
                <h3 class="panel-title"><i class="fa fa-cubes"></i> All Counselling Day and Time</h3>
              </div>
              <div class="col-md-4 text-right">
                <a href="{{url('admin/counselling')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> Teacher List</a>
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
                                  <th>Day</th>
                                  <th>Time</th>
                                  <th>Send Request</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach($data as $value)
                              <tr>
                                  <td>{{$value->day}}</td>
                                  <td>{{$value->time}}</td>
                                  <td>
                                    <a href="{{url('admin/counselling/show/'.$value->id)}}" class="btn btn-success" type="button" name="button"><i class="fa fa-check fa lg"></i></a>
                                    <!-- <a href="{{url('admin/counselling/show/'.$value->id)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-trash fa-lg"></i></a> -->
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
