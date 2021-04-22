{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bomex') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main>
<div class="container">
    <div style="height: 100%;" class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">

            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body">
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
                            max-width: 450px;
                            margin: 0 auto;
                            padding: 30px 0;
                              font-size: 15px;
                        }
                        .signup-form h2 {
                            color: #636363;
                            margin: 0 0 15px;
                            position: relative;
                            text-align: center;
                        }
                        .signup-form h2:before, .signup-form h2:after {
                            content: "";
                            height: 2px;
                            width: 30%;
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
                            background: #f2f3f7;
                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                            padding: 30px;
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
                        .signup-form .row div:first-child {
                            padding-right: 10px;
                        }
                        .signup-form .row div:last-child {
                            padding-left: 10px;
                        }
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

                                <h2>LogIn</h2>
                                <p class="hint-text">Log into your account</p>
                                @csrf
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
    </div>
</div>
</main>
</body>
</html>
{{-- @endsection --}}
