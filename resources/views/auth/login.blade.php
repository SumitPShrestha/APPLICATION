<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pace/pace-flash.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution-slider/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins//cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body  id="body" data-spy="scroll" >
<div id="app">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('userame') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input id="email" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(function() {
        $('#toggle-sidebar').on('click','nav.navbar', function () {
            $('body').hasClass('sidebar-collapse') ? $('body').removeClass('sidebar-collapse') : $('body').addClass('sidebar-collapse');
        })
    });

    $( document ).ready(function() {
        // Handler for .ready() called.
        $('#toggle-sidebar').click( function () {
            $('body').hasClass('sidebar-collapse') ? $('body').removeClass('sidebar-collapse') : $('body').addClass('sidebar-collapse');
        })

    })
</script>
</body>
</html>


