@extends('layouts.admin')
@section('title', 'Add Counselling Request')
@section('content')
<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/counselling/registration')}}" method="post">
        @csrf
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i> Add Counselling Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{url('admin/counselling')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Teacher</a>
                    </div>
                    <div class="clearfix">
                  </div>
                  </div>
              </div>

              @if(Session::has('success'))
                  <script>
                      swal({ title: "Success!", text: "User Registration Success.", timer:3000, icon: "success",});
                  </script>
                  @endif

                  @if(Session::has('error'))
                  <script>
                      swal({ title: "Opps!", text: "Registration failed.", timer:3000, icon: "warning",});
                  </script>
                  @endif

              <div class="panel-body">

                    <div class="form-group {{$errors->has('tName')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Teacher Name</label>
                        <div class="col-sm-7">

                          <input type="text" class="form-control" name="tName"
                          @foreach ($data as $value)
                           value="{{$value->name}}"
                          @endforeach
                          readonly >

                          @if ($errors->has('tName'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('tName') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('tEmail')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Teacher Email</label>
                        <div class="col-sm-7">

                          <input type="text" class="form-control" name="tEmail"
                          @foreach ($data as $value)
                           value="{{$value->email}}"
                          @endforeach
                          readonly >

                          @if ($errors->has('tEmail'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('tEmail') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('sName')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Student Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="sName" value="{{Auth::user()->name}}" readonly>
                          @if ($errors->has('sName'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('sName') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('sEmail')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Student Email</label>
                        <div class="col-sm-7">
                          <input type="sEmail" class="form-control" name="sEmail" value="{{Auth::user()->email}}" readonly >
                          @if ($errors->has('sEmail'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('sEmail') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('day')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Day</label>
                        <div class="col-sm-7">

                          <input type="text" class="form-control" name="day"
                          @foreach ($data as $value)
                           value="{{$value->day}}"
                          @endforeach
                          readonly >

                          @if ($errors->has('day'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('day') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('time')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Time</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="time"
                          @foreach ($data as $value)
                           value="{{$value->time}}"
                          @endforeach
                          readonly >

                          @if ($errors->has('time'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('time') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

              </div>

              <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">SUBMIT</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
