<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>AdminLTE 2 | Log in</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css" />
  <!-- Theme style -->
  <link href="{{asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="{{asset('plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html">اداره الموارد البشريه</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">لدخول لتطبيق ادخل بياناتك</p>
      <form action="{{route('Log_url')}}" method="post">

        @csrf
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="البري= الالكترونى" />
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="كلمه السر" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row container">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="{{route("resetPassword")}}">نسيت كلمه السر</a>
          </div><!-- /.col -->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">الدخول</button>
          </div><!-- /.col -->
        </div>
      </form>

      <a href="{{route("google_auth")}}" class="google-btn">
        <div class="google-icon-wrapper">
          <i class="fa-brands fa-google"></i>
        </div>
        <p class="btn-text"><b>Sign in with Google</b></p>

        <div class="social-auth-links text-center">

        </div><!-- /.social-auth-links -->

        <!----<a href="#">I forgot my password</a><br>--->


      </a><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{asset('plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>

</html>