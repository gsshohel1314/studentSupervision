@extends('layouts.admin')
@section('title', $routine->name)
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i> View Routine Information</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/routine')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Routine</a>
                  </div>
                  <div class="clearfix">
                </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <table class="table table-striped table-bordered view-table-custom">
                      <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$routine->name}}</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$routine->email}}</td>
                      </tr>

                      <tr>
                        <td>Initial</td>
                        <td>:</td>
                        <td>{{$routine->initial}}</td>
                      </tr>
                      <tr>

                        <td>Day</td>
                        <td>:</td>
                        <td>{{$routine->day}}</td>
                      </tr>

                      <tr>
                        <td>Time</td>
                        <td>:</td>
                        <td>{{$routine->time}}</td>
                      </tr>

                    </table>
                  </div>
                  <div class="col-md-2"></div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
