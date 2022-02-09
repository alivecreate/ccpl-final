<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CCPL - Admin (Login)</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adm')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('adm')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adm')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

@if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif



  <!-- /.login-logo -->
    <div class="text-center m-3 p-2" style="">
      <img src="{{url('website')}}/logo.jpg" width="100" 
      style="background: white;border-radius: 10%;padding: 8px;">
    </div>

  <div class="card card-outline card-warning">

    <div class="card-header text-center">
      <a href="#" class="h1"><b>AdminPanel</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>


      <form action="{{route('auth.check')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" 
            name="email" value="{{old('email')}}" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <span class="text-danger">@error('email') {{$message}} @enderror</span>


        <div class="input-group mb-3">
          <input type="password" class="form-control" 
            name="password"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <span class="text-danger">@error('password') {{$message}} @enderror</span>

        <div class="row justify-content-center">

          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->

          <!-- /.col -->
          <div class="col-6 ">
            
            <button type="submit" class="btn btn-warning btn-block">
            <i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{url('admin')}}/register" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('adm')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('adm')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('adm')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
