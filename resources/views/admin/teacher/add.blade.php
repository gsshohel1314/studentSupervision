@extends('layouts.admin')
@section('title', 'Add Teacher')
@section('content')
<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/teacher')}}" method="post">
        @csrf
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i> Add Teacher Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{url('admin/teacher')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Teacher</a>
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

                    <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="name" value="{{old('name')}}">
                          @if ($errors->has('name'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('name') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('initial')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Initial</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="initial" value="{{old('initial')}}">
                          @if ($errors->has('initial'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('initial') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="email" value="{{old('email')}}">
                          @if ($errors->has('email'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('email') }}</strong>
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
