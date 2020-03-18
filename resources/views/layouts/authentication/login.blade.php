
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Login</title>

        <!-- Base Css Files -->
        <link href="{{asset('contents/admin')}}/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('contents/admin')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{asset('contents/admin')}}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{asset('contents/admin')}}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{asset('contents/admin')}}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{asset('contents/admin')}}/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{asset('contents/admin')}}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin')}}/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{asset('contents/admin')}}/js/modernizr.min.js"></script>

    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img">
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"><strong>Student Supervision System</strong> </h3>
                </div>


                <div class="panel-body">

                  <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">

                  @csrf

                      <div class="form-group">
                          <div class="col-md-12">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!--<div class="form-group">
                          <div class="col-md-12">
                              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} input-lg" name="username" value="{{ old('username') }}" placeholder="User Name" required autofocus>

                              @if ($errors->has('username'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>-->

                      <div class="form-group">
                          <div class="col-md-12">
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-lg" name="password" placeholder="Password" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-md-6 offset-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                      {{ __('Remember Me') }}
                                  </label>
                              </div>
                          </div>
                      </div>


                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-primary btn-lg w-lg waves-effect waves-light">
                              {{ __('Login') }}
                          </button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>
                    </div>
                  </form>

                </div>

            </div>
        </div>


    	<script>
            var resizefunc = [];
        </script>
    	<script src="{{asset('contents/admin')}}/js/jquery.min.js"></script>
        <script src="{{asset('contents/admin')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('contents/admin')}}/js/waves.js"></script>
        <script src="{{asset('contents/admin')}}/js/wow.min.js"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{asset('contents/admin')}}/js/jquery.scrollTo.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{asset('contents/admin')}}/assets/fastclick/fastclick.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{asset('contents/admin')}}/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="{{asset('contents/admin')}}/js/jquery.app.js"></script>

	</body>
</html>
