<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="image/png" href="{{asset('css1/css1/image/fav.png')}}">
<link rel="stylesheet" href="{{asset('css1/css1/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css1/css1/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/line-icons.css')}}">
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
          <form class="admin-form" form method="post" action="{{route('admin.register')}}">
            @csrf
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="logo"><img src="images/logo2.png" alt=""></div>
            <h4>Sign Up Account</h4>
            <span>Please enter your user information</span>

              <label><i class="fa fa-user-circle-o"></i></label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="全名" autofocus>
              <label><i class="fa fa-envelope"></i></label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
              <label><i class="fa fa-unlock-alt"></i></label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="密码㊙️">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              <label><i class="fa fa-unlock-alt"></i></label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder=" 密码确认㊙️">
              <input type="checkbox" id="checkbox">
              <label for="checkbox">I accept the <a href="register.html#" title="">terms & Conditions</a></label>
              <br>

              <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
              </button>
            </br>

            <span>Already a member? <a href="{{route('admin.login')}}" title="">Sign in</a></span> </form>
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
<?php /*
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
