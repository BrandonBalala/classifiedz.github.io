@extends('layouts.app')

@section('title', '*Login|Register*')

@section('content')
<div class="container authenticationContainer">
    <div class="row">
        <div class="col-sm-5">
            <div class ="form-box">
                <div class="form-top">
                    <div class="form-top-left">
            <div class="panel panel-default">
                <div class="panel-heading h1">Login</div>
                    </div>
                    
                </div>
                <div class="form-bottom">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder= "E-mail Address" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder= "Password" required>

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
                </div>               
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
<!--                                 <br /><br /> Not Registered yet?
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Create an Account
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>

         <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>


        <div class="col-sm-5">
            <div class ="form-box">
                <div class="form-top">
                    <div class="form-top-left">
            <div class="panel panel-default">
                <div class="panel-heading h1">Register</div>
                    </div>

                </div>
                <div class="form-bottom">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder= "Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                           

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" placeholder= "Username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emailRegister') ? ' has-error' : '' }}">
                            <label for="emailRegister" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="emailRegister" type="email" class="form-control" name="emailRegister" value="{{ old('emailRegister') }}" required>

                                @if ($errors->has('emailRegister'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailRegister') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('passwordRegister') ? ' has-error' : '' }}">
                            <label for="passwordRegister" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="passwordRegister" type="password" class="form-control" name="passwordRegister" required>

                                @if ($errors->has('passwordRegister'))
                                    <span class="help-block"
                                        <strong>{{ $errors->first('passwordRegister') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="passwordRegister-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="passwordRegister-confirm" type="password" class="form-control" name="passwordRegister_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
<!--                                 <br /><br />Already have an account?

                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Sign in here
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
