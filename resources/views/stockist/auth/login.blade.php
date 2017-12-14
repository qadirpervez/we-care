<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/font-awesome.min.css') }}">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ URL::asset('css/stockist/custom.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Reseller</span><strong class="text-primary">Dashboard</strong></div>
            <form id="login-form" role="form" method="POST" action="{{ url('/stockist/login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="email" class="label-custom">Email</label>
                <input id="email" type="text" name="email" required="" value="{{ old('email') }}" autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label for="password" class="label-custom">Password</label>
                <input id="password" type="password" name="password" required="">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                  <div class="col-md-12">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" name="remember">Remember Me
                          </label>
                      </div>
                  </div>
              </div><button type="submit" id="login" class="btn btn-primary">Login</button>
              <!-- This should be submit button but I replaced it with <a> for demo purposes-->
            </form><a href="{{ url('/stockist/password/reset') }}" class="forgot-pass">Forgot Password?</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="http://wervas.com" class="external">Wervas</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="{{ URL::asset('js/stockist/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/stockist/jquery.cookie.js') }}"> </script>
    <script src="{{ URL::asset('js/stockist/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/stockist/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/stockist/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ URL::asset('js/stockist/front.js') }}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
