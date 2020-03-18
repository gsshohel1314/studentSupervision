@extends('layouts.admin')
@section('title', 'Add User')
@section('content')
<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/user')}}" method="post">
        @csrf
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i>Add User Information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{url('admin/user')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All users</a>
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

                    <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control" name="email" value="{{old('email')}}">
                          @if ($errors->has('email'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('email') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('phone')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
                          @if ($errors->has('phone'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('phone') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('role')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">User Role</label>
                        <div class="col-sm-7">
                          <select class="form-control" name="role">
                              <option value="">Select User Role</option>
                              @foreach ($allRole as $value)
                                <option value="{{$value->role_id}}">{{$value->role_name}}</option>
                              @endforeach
                          </select>

                          @if ($errors->has('role'))
                            <span class="invalid-feedback mb-0" role="alert">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                          @endif

                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" name="password" value="">
                          @if ($errors->has('password'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('password') }}</strong>
      											</span>
      									  @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Confirm-Password</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" name="password_confirmation" value="">
                        </div>
                    </div>

              </div>

              <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">REGISTRATION</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
