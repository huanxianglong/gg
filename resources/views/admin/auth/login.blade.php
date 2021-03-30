
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="image/png" href="{{asset('css1/css1/image/fav.png')}}">
<link rel="stylesheet" href="{{asset('css1/css1/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css1/css1/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css1/css1/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('css1/css1/style.css')}}">
<link rel="stylesheet" href="{{asset('css1/css1/color.css')}}">
<link rel="stylesheet" href="{{asset('css1/css1/responsive.css')}}">
</head>
<body>
<!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
<div class="panel-layout">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="admin-lock vh100">
          <div class="admin-form">
			  <div class="logo"><img src="images/logo2.png" alt=""></div>
            <h4>Sign In Account</h4>
            <span>Please enter your user information</span>
            <form method="post" action="{{route('admin.login')}}">
              @csrf
              <label><i class="fa fa-envelope"></i></label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"autofocus>
              <label><i class="fa fa-unlock-alt"></i></label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Password">
              <input type="checkbox" id="remember">
              <label for="remember">Remember Me <a href="login.html#" title="">Forgot password?</a></label>

              <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
              </button>

              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
            </form>
            <span>Don't have an account? <a href="{{route('admin.login')}}" title="">Sign up</a></span> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('js1/js/jquery.js')}}"></script>
<script src="{{asset('js1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js1/js/custom.js')}}"></script>
</body>
</html>
<?php /*<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
*/
?>
