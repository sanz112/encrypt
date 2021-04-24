
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'RealCapitalAssets') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <link rel="stylesheet" href="{{ asset('css/plug/bootstrap.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('css/plug/fontAwesome.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('css/plug/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/plug/default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/plug/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/back/img/favicon.ico">
    <!-- Tweaks for older IEs-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
<div class="container">
    <div class="mt-5" style="height: 100%; width; 100%; margin-top; 10%; display:flex; justify-content: center; align-items: center;">
        <div>
                    <h4 class="text-center">RealCapitalAssets</h4>

                                          <div class="signup-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h2>LogIn</h2>
                                <p class="hint-text">Log into your account</p>

                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                </div>
                            </form>
                            <div class="text-center">Do not have an Account? <a style="color:#000;" class="btn btn-link ml-2" href="/register">{{ __('Sign Up?') }}</a></div>
                        </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>

</body>
</html>
{{-- @endsection --}}
