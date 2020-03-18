<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <title>@yield('title','Dashboard')</title>
        <link rel="shortcut icon" href="{{asset('contents/admin')}}/images/favicon_1.ico">
        <link href="{{asset('contents/admin')}}/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{asset('contents/admin')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{asset('contents/admin')}}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{asset('contents/admin')}}/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="{{asset('contents/admin')}}/css/animate.css" rel="stylesheet" />
        <link href="{{asset('contents/admin')}}/css/waves-effect.css" rel="stylesheet">
        <link href="{{asset('contents/admin')}}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        <link href="{{asset('contents/admin')}}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin')}}/css/style.css" rel="stylesheet" type="text/css" />
        <script src="{{asset('contents/admin')}}/js/modernizr.min.js"></script>

        <!--sweetalert-->
        <script src="{{asset('contents/admin')}}/js/jquery.min.js"></script>
        <script src="{{asset('contents/admin')}}/js/sweetalert.min.js"></script>

        <!--Datatable-->
        <link href="{{asset('contents/admin')}}/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    </head>

    <body class="fixed-left">
        <div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center">
                        <a  class="logo"><i class="fa fa-leanpub"></i> <span> Student Supervision </span></a>
                    </div>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-right">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <!-- <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form> -->

                            <ul class="nav navbar-nav navbar-right pull-right">


                                <!-- <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->



                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>



                                <!-- <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('contents/admin')}}/images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li> -->


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <!-- <div class="pull-left">
                            <img src="{{asset('contents/admin')}}/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div> -->
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                                <ul class="dropdown-menu">


                                    <!-- <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li> -->


                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>

                            @php
                            $users=\App\UserRole::all();
                            @endphp
                            @foreach($users as $user)
                            <p class="text-muted m-0"><h4 >@if(Auth::user()->role_id==$user->role_id) {{$user->role_name}} @endif</h4></p>
                            @endforeach
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{url('admin')}}" class="waves-effect {{Request::is ('admin')? 'active':''}}"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            @if(Auth::user()->role_id=='1')
                            <li>
                                <a href="{{url('admin/user')}}" class="waves-effect {{Request::is ('admin/user')? 'active':''}}"><i class="fa fa-user"></i><span> Users </span></a>
                            </li>
                            @endif

                            @if(Auth::user()->role_id=='2')
                            <li>
                                <a href="{{url('admin/routine/create')}}" class="waves-effect {{Request::is ('admin/routine/create')? 'active':''}}"><i class="fa fa-user"></i><span> Input Routine </span></a>
                            </li>
                            @endif

                            <li>
                                <a href="{{url('admin/counselling/routine')}}" class="waves-effect {{Request::is ('admin/counselling/routine')? 'active':''}}"><i class="fa fa-user"></i><span> Counselling Routine </span></a>
                            </li>

                            @if(Auth::user()->role_id=='3')
                            <li>
                                <a href="{{url('admin/counselling')}}" class="waves-effect {{Request::is ('admin/counselling')? 'active':''}}"><i class="fa fa-user"></i><span> Request Appointment </span></a>
                            </li>
                            @endif

                            @if(Auth::user()->role_id=='2')
                            <li>
                                <a href="{{url('admin/counselling/request')}}" class="waves-effect {{Request::is ('admin/counselling/request')? 'active':''}}"><i class="fa fa-user"></i><span>All Counselling Request </span></a>
                            </li>
                            @endif

                            @if(Auth::user()->role_id!='2')
                            <li>
                                <a href="{{url('admin/teacher')}}" class="waves-effect {{Request::is ('admin/teacher')? 'active':''}}"><i class="fa fa-user"></i><span> Teacher List </span></a>
                            </li>
                            @endif

                            @if(Auth::user()->role_id=='1')
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class=" md-view-list"></i><span> Messages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li>
                                      <a href="{{url('admin/alluser')}}" class="waves-effect {{Request::is ('admin/user')? 'active':''}}"><i class="fa fa-user"></i><span> All User </span></a>

                                      <a href="{{url('admin/allMessage')}}" class="waves-effect {{Request::is ('admin/allMessage')? 'active':''}}"><i class="fa fa-user"></i><span> All Message </span></a>
                                  </li>
                                </ul>
                            </li>
                            @endif

                            @if(Auth::user()->role_id=='2')
                            <li>
                                <a href="{{url('admin/allStudent')}}" class="waves-effect {{Request::is ('admin/allStudent')? 'active':''}}"><i class="fa fa-user"></i><span> Messages </span></a>
                            </li>
                            @endif

                            <!-- <li>
                                <a href="{{url('admin/file/create')}}" class="waves-effect {{Request::is ('admin/file/create')? 'active':''}}"><i class="fa fa-user"></i><span> Teacher File </span></a>
                            </li> -->

                            @if(Auth::user()->role_id=='3')
                            <li>
                                <a href="{{url('admin/allTeacher')}}" class="waves-effect {{Request::is ('admin/allTeacher')? 'active':''}}"><i class="fa fa-user"></i><span> Messages </span></a>
                            </li>
                            @endif

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect "><i class="md-settings-power"></i><span> Logout </span></a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="content-page">
                <div class="content">
                    <div class="container">

                        @yield('content')

                    </div>

                </div>

                <footer class="footer text-right">
                    <!-- 2015 © Moltran. -->
                </footer>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <script src="{{asset('contents/admin')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('contents/admin')}}/js/waves.js"></script>
        <script src="{{asset('contents/admin')}}/js/wow.min.js"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.scrollTo.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/chat/moment-2.2.1.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{asset('contents/admin')}}/assets/fastclick/fastclick.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-blockui/jquery.blockUI.js"></script>
        <script src="{{asset('contents/admin')}}/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/sweet-alert/sweet-alert.init.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="{{asset('contents/admin')}}/assets/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="{{asset('contents/admin')}}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="{{asset('contents/admin')}}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.app.js"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.dashboard.js"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.chat.js"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.todo.js"></script>
        <script src="{{asset('contents/admin')}}/js/custom.js"></script>


        <script src="{{asset('contents/admin')}}/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
              $('#datatable').dataTable( {
              "ordering": false
              } );
            } );
        </script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    </body>
</html>
