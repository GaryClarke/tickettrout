<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title class="welcome-title">TicketTrout</title>

    {{-- Styles --}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gidugu" rel="stylesheet">


</head>
<body>
<div id="app" class="canvas">

    <div class="screen tab-content">
        <div class="welcome-panel">

            {{-- Premdi Title --}}
            <h1 class="welcome-title" style="color: #ff7d00">
                TicketTrout
            </h1>

            <h3 style="text-align: center">(This is a prototype)</h3>


            <div class="panel-body">


                {{--Login Form--}}
                <form id="loginForm" method="POST" action="{{ route('login') }}" role="form">
                    {{ csrf_field() }}

                    {{--Facebook Login--}}
                    {{--<div class="form-group">--}}
                        {{--<div>--}}
                            {{--<a href="/auth/facebook" class="btn btn-facebook btn-block">--}}
                                {{--<i class="fa fa-facebook-square" aria-hidden="true"></i>--}}
                                {{--Quick Sign In / Register--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<p style="margin-bottom: 0">--}}
                            {{--**Note - The Facebook login can only be used by fb registered testers at the moment.--}}
                        {{--</p>--}}
                    {{--</div>--}}

                    {{--<p class="fake-legend"><span>Or</span></p>--}}

                    {{--Errors--}}
                    @if(count($errors) > 0)
                        <div class="error-text">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="auth-input-group">

                        {{--Email--}}
                        <div class="form-group">
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email') }}"
                                   placeholder="Email"
                                   required
                                   autofocus
                            >

                        </div>

                        {{--Password--}}
                        <div class="form-group">
                            <input type="password"
                                   name="password"
                                   id="password"
                                   class="form-control"
                                   placeholder="Password"
                                   required
                            >
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                            <a class="pull-right" href="#">Forgot password</a>
{{--                            <a class="pull-right" href="{{ route('password.request') }}">Forgot password</a>--}}
                        </div>

                    </div>

                    {{--Submit--}}
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Sign In
                            </button>
                        </div>
                    </div>

                    {{--<div class="form-group" style="text-align: center; font-weight: 600; font-size: 14px">--}}
                    {{--<a href="/register">NEW USER</a>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--Premdi is not accepting new registrations at the moment due to changes to the email system. This--}}
                    {{--will be available again at 3pm on Monday 6th March.--}}
                    {{--</div>--}}
                    <div style="text-align: center;">
                        <a href="#" style="color: #909090">Privacy</a> |
                        <a href="#" style="color: #909090">Contact</a>

                    </div>
                </form>
            </div>
        </div>
        </div>

        {{--@include('nav.main-nav')--}}



</div>
</body>
</html>
