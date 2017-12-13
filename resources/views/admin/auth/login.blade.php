<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('css/admin/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('css/admin/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ URL::asset('css/admin/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('css/admin/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" method="POST" action="{{ url('/admin/login') }}">
              {{ csrf_field() }}
              <h1>Admin Login</h1>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                  <div>
                      <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                  <div>
                      <input id="password" type="password" placeholder="Password" class="form-control" name="password">

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
                <a class="reset_pass" href="{{ url('/admin/password/reset') }}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> We Care!</h1>
                  <p>©2016 All Rights Reserved. We Care, Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
