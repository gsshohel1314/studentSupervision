@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Welcome !</h4>
        <ol class="breadcrumb pull-right">

            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>

<div class="row">

  <div class="row">
    @if(Auth::user()->role_id=='1')
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalUser }}

                  </span>
                    Total Users
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Users <span class="pull-right"></span></h5>
                      {{-- <div class="progress progress-sm m-0">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              <span class="sr-only">60% Complete</span>
                          </div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalStudent }}

                  </span>
                    Total Student
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Students <span class="pull-right"></span></h5>
                      {{-- <div class="progress progress-sm m-0">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              <span class="sr-only">60% Complete</span>
                          </div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalTeacher }}

                  </span>
                    Total Teacher
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Teachers <span class="pull-right"></span></h5>
                      {{-- <div class="progress progress-sm m-0">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              <span class="sr-only">60% Complete</span>
                          </div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>

    @endif



    @if(Auth::user()->role_id=='2')
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalStudent }}
                  </span>
                    Total Student
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Students <span class="pull-right"></span></h5>

                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-success"><i class="fa fa-archive"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalRequest }}
                  </span>
                    Total Request
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Requests <span class="pull-right"></span></h5>
                  </div>
              </div>
          </div>
      </div>
    @endif

    @if(Auth::user()->role_id=='3')
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalTeacher }}
                  </span>
                    Total Teacher
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Teachers <span class="pull-right"></span></h5>

                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
              <span class="mini-stat-icon bg-success"><i class="fa fa-envelope"></i></span>
              <div class="mini-stat-info text-right text-muted">
                  <span class="counter">
                    {{ $totalAdminMessage }}
                  </span>
                    Total Message
              </div>
              <div class="tiles-progress">
                  <div class="m-t-20">
                      <h5 class="text-uppercase"> Messages <span class="pull-right"></span></h5>
                  </div>
              </div>
          </div>
      </div>
    @endif
</div>

@endsection
