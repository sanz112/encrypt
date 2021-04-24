
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

                    <style>

                        .form-control {
                            height: 40px;
                            box-shadow: none;
                            color: #969fa4;
                        }
                        .form-control:focus {
                            border-color: #5cb85c;
                        }
                        .form-control, .btn {
                            border-radius: 3px;
                        }
                        .signup-form {
                            max-width: 1000px;
                            margin: 0;
                            padding: 30px 0;
                              font-size: 15px;
                        }
                        .signup-form h2 {
                            color: #636363;
                            margin: 0;
                            font-size: 24px;
                            position: relative;
                            text-align: center;
                        }
                        .signup-form h2:before, .signup-form h2:after {
                            content: "";
                            height: 2px;
                            width: 10%;
                            background: #d4d4d4;
                            position: absolute;
                            top: 50%;
                            z-index: 2;
                        }
                        .signup-form h2:before {
                            left: 0;
                        }
                        .signup-form h2:after {
                            right: 0;
                        }
                        .signup-form .hint-text {
                            color: #999;
                            margin-bottom: 30px;
                            text-align: center;
                        }
                        .signup-form form {
                            color: #999;
                            border-radius: 3px;
                            margin-bottom: 15px;
                            background: #ffffff;
                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                            padding: 10px;
                        }
                        .signup-form .form-group {
                            margin-bottom: 20px;
                        }
                        .signup-form input[type="checkbox"] {
                            margin-top: 3px;
                        }
                        .signup-form .btn {
                            font-size: 16px;
                            font-weight: bold;
                            min-width: 140px;
                            outline: none !important;
                        }
                        /* .signup-form .row div:first-child {
                            padding-right: 10px;
                        }
                        .signup-form .row div:last-child {
                            padding-left: 10px;
                        } */
                        .signup-form a {
                            color: #fff;
                            text-decoration: underline;
                        }
                        .signup-form a:hover {
                            text-decoration: none;
                        }
                        .signup-form form a {
                            color: #5cb85c;
                            text-decoration: none;
                        }
                        .signup-form form a:hover {
                            text-decoration: underline;
                        }
                        </style>
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
